<?php 
namespace Sushma\Mod3\Observer;

use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Event\Observer;
use Psr\Log\LoggerInterface;

class ProductPageObserver implements ObserverInterface{
    protected $logger;
    public function __construct(LoggerInterface $logger){
        $this->logger = $logger;
    }
    public function execute(Observer $observer){
        $product = $observer->getEvent()->getProduct();
        $productName = $product->getName();
        $productSku = $product->getSku();
        $productPrice = $product->getPrice();
        $quantity=$product->getSalableQuantity();

        $this->logger->info("Product name---:",[$productName,$productSku,$productPrice,$quantity]);
        // $this->logger->info([
        //     'name' => $product->getName(),
        //     'sku' => $product->getSku()
        //     // Add other product attributes as needed
        // ]);

    }
}