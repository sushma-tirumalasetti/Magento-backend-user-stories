<?php

namespace Sushma\Mod14\Observer;

use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Event\Observer;
use Magento\Framework\Notification\NotifierInterface as NotifierPool;
use Psr\Log\LoggerInterface;

class AdminNotification implements ObserverInterface{
    protected $notificationAdminPanel;
    protected $logger;

    public function __construct(NotifierPool $notificationAdminPanel,LoggerInterface $logger){
        $this->notificationAdminPanel = $notificationAdminPanel;
        $this->logger = $logger;
    }
    public function execute(Observer $observer){
        $observe=$observer->getEvent()->getProduct();
        $sku = $observe->getSku();
        $this->logger->info("my custom interface");
        $this->notificationAdminPanel->addMajor(
            'low_inventory_notification',
            'Low Inventory Alert $'.$sku
        );
    }
}