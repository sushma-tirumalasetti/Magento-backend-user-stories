<?php
namespace Sushma\Mod14\Observer;
use Magento\Framework\Event\Manager;
use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Event\Observer;
use Magento\InventorySalesAdminUi\Model\GetSalableQuantityDataBySku;
use Psr\Log\LoggerInterface;
use Magento\Catalog\Model\Product;

class ProductThresholdObserver implements ObserverInterface{
    protected $eventManager;
    protected $logger;
    protected $productRepository;
    protected $stockRegistry;
    protected $getSalableQunatity;

    public function __construct(Manager $eventManager,LoggerInterface $logger,GetSalableQuantityDataBySku $getSalableQunatity){
        $this->eventManager  = $eventManager;
        $this->logger = $logger;
        $this->getSalableQunatity = $getSalableQunatity;
        

    }
    public function getRemainingStockBySku($sku){
        // try{
            $stockInfo = $this->getSalableQunatity->execute($sku);
            // $this->logger->info("bvhf vjkfvjfnvjkf".$stockInfo);
            return $stockInfo[0]['qty'];
        // }
        // catch(\Exception $e){

        //     return 0;
        // }
    }
    public function execute(Observer $observer){
        $order = $observer->getEvent()->getOrder();
        foreach($order->getAllVisibleItems() as $item){
            $product=$item->getProduct();
            $sku = $product->getSku();
            $this->logger->info("stockItem ". $sku);
            $remainingStock = $this->getRemainingStockBySku($sku);
            $this->logger->info(" listening event is dispatched".$remainingStock);
            if($remainingStock < 98){
                $this->eventManager->dispatch("product_threshold_check",['product'=>$product]);
            }
        }

    }
}