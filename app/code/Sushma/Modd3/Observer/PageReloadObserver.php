<?php
namespace Sushma\Modd3\Observer;

use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Event\Observer;
use Psr\Log\LoggerInterface;

class PageReloadObserver implements ObserverInterface{
    protected $logger;
    protected $resultPageFactory;
    public function __construct(LoggerInterface $logger){
        $this->logger = $logger;
    }
    public function execute(Observer $observer){
        // $block = $observer->getBlock();
        // $transport = $observer->getTransport();
        // $html = $transport->getHtml();
        $this->logger->info("<DOCTYPE html>
            <html>
                <head>
                    <title>My event listener is listening to it and logging it in the system.log file</title>
                </head>
                <body>
                    <h1>This will give you an idea about event observer and logging it in the system.log file</h1>
                </body>
            </html>");
        // $event = $observer->getEvent();
        // $block = $observer->getData('block');
        // $this->logger->info("---------------------------------tutyutyutyuytut");
        // if ($block instanceof \Magento\Framework\View\Element\AbstractBlock) {
        //     $html = $block->toHtml();
        //     $this->logger->info($html);
        // } 
    }
}
