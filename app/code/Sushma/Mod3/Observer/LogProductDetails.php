<?php
namespace Sushma\Mod3\Observer;
use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Event\Observer;
use Psr\Log\LoggerInterface;

class LogProductDetails implements ObserverInterface{
    protected $logger;
    public function __construct(LoggerInterface $logger){
        $this->logger = $logger;
    }
    public function execute(Observer $observer){
        $product = $observer->getEvent()->getProduct();
    //    $name = $product->getName();
    //    $sku = $product->getSku();
    //    $price = $product->getPrice();
    //     $this->logger->info([$product,$name,$sku,$price]);
        // $this->logger->info("----------sushma");
        $this->logger->info([
            'name' => $product->getName(),
            'sku' => $product->getSku(),
            // Add other product attributes as needed
        ]);

    }
}