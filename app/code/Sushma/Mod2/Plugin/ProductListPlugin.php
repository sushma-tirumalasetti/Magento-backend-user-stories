<?php

namespace Sushma\Mod2\Plugin;
use Magento\Catalog\Model\Product;
use Psr\Log\LoggerInterface;

class  ProductListPlugin{       
    
    protected $logger;

    public function __construct(LoggerInterface $logger) {
        $this->logger = $logger;
    }

    public function afterGetName(Product $subject, $result){
        if ($subject->getPrice() < 60) {
            $result .= " on sale!";
        }

        $this->logger->info("---------------------------------------------------------------werwerewwr");

        return $result;
    }
}
