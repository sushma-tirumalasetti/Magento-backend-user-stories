<?php
namespace Sushma\Mod15\Observer;

use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Event\Observer;
use Magento\NewRelicReporting\Model\Module\Collect;
use Psr\Log\LoggerInterface;
use Sushma\Mod15\Model\CustomerGroupFactory;
use Sushma\Mod15\Model\ResourceModel\CustomerGroup\CustomerGroupCollectionFactory;
use Sushma\Mod15\Model\ResourceModel\CustomerGroupResourceModelFactory;

class CustomOrderPlaceObserver implements ObserverInterface{
    protected $logger;
    protected $modelFactory;
    protected $resourceModel;
    protected $collection;
    public function __construct(LoggerInterface $logger,CustomerGroupFactory $modelFactory,CustomerGroupResourceModelFactory $resouceModel,CustomerGroupCollectionFactory $collection){
        $this->logger = $logger;
        $this->modelFactory = $modelFactory;
        $this->resourceModel = $resouceModel;
        $this->collection= $collection;
    }
    public function execute(Observer $observer){
        $order = $observer->getEvent()->getOrder();
        $customerGroupId = $order->getCustomerGroupId();
        // $model = $this->modelFactory->create();
        $resourcemodel = $this->resourceModel->create();
        $ourCollection = $this->collection->create();

        // $ourCollection->addAttributeToSelect("*");
        $ourCollection->addFieldToFilter('customer_group_id', ['eq' => $customerGroupId]);
        // $this->logger->info("--------------------------------------------------------------------------------------order details".$model);
        $model = $ourCollection->getFirstItem();
        if($model->getCustomerGroupId() == null){
            $model->setData('customer_group_id',$order->getCustomerGroupId());
            $model->setData('amount',$order->getSubTotal());

            $resourcemodel->save($model);

        }
        else{
            $this->logger->info("-------------".$model->getData('amount'));
            $prize = $model->getData('amount');
            $this->logger->info("--------".$prize);
            $model->setData('amount',$order->getSubTotal()+$prize);
            $resourcemodel->save($model);
        }
        // $this->logger->info("=--------------".$model);


        $this->logger->info("--------------------------------------------------------------------------------------order details". $order->getCustomerId()."  ".$order->getCustomerGroupId());
    }

}