<?php
namespace Sushma\Mod2\Plugin\Html;

use \Magento\Theme\Block\Html\Breadcrumbs;
use Psr\Log\LoggerInterface;

class BreadCrumpPlugin
{

    protected $logger;

    public function __construct(LoggerInterface $logger) {
        $this->logger = $logger;
    }

   public function beforeAddCrumb(Breadcrumbs $subject, $crumbName, $crumbInfo)
   {
       if (isset($crumbInfo['label'])) {
           // Append custom text to the breadcrumb label
           $crumbInfo['label'] .= ' Custom Text';
            $this->logger->info("----------------------------------------------------asdfasdfasfsafsfsdf");
       }

       return [$crumbName, $crumbInfo];
   }
}
