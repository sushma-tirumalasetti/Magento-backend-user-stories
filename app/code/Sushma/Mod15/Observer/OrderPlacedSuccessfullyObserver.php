<?php
namespace Sushma\Mod15\Observer;

use Magento\Framework\Event\Manager;
use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Event\Observer;
use Psr\Log\LoggerInterface;

class OrderPlacedSuccessfullyObserver implements ObserverInterface{
    protected $eventManager;
    protected $logger;
    public function __construct(LoggerInterface $logger, Manager $eventManager){
        $this->logger = $logger;
        $this->eventManager = $eventManager;
    }
    public function execute(Observer $observer){
        $order = $observer->getEvent()->getOrder();
        
        // $this->logger->info("--------------------------------------------------------------------------------------order details". $order->getCustomerId()."  ".$order->getCustomerGroupId());
        $this->eventManager->dispatch("custom_order_placement",['order'=>$order]);

    }

}