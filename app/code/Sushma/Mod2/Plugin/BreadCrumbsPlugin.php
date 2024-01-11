<?php
namespace Sushma\Mod2\Plugin;

use \Magento\Theme\Block\Html\Breadcrumbs;
use Psr\Log\LoggerInterface;

class BreadCrumbsPlugin
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
        }
        
        return [$crumbName, $crumbInfo];
    }
    
    public function afterGetCrumb(Breadcrumbs $subject, $result)
    {
        $this->logger->info("----------------------------------------------------asdfasdfasfsafsfsdf");
        if (isset($result['label'])) {
            // Append custom text to the breadcrumb label
            $result['label'] .= ' Custom Text';
        }

        return $result;
    }
}
