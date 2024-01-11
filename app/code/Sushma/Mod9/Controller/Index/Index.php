<?php

namespace Sushma\Mod9\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Config\ScopeConfigInterface;

class Index extends Action
{
    protected $resultPageFactory;
    protected $scopeConfig;

    public function __construct(
        Context $context,
        PageFactory $resultPageFactory,
        ScopeConfigInterface $scopeConfig
    ) {
        $this->resultPageFactory = $resultPageFactory;
        $this->scopeConfig = $scopeConfig;
        parent::__construct($context);
    }

    public function execute()
    {
        $enable = $this->scopeConfig->getValue('general/custom_group/enable', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
        $textToDisplay = $this->scopeConfig->getValue('general/custom_group/text_to_display', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);

        if ($enable == '1') { // '1' corresponds to 'Yes' in Magento
            $resultPage = $this->resultPageFactory->create();
            $resultPage->getConfig()->getTitle()->set($textToDisplay);
            return $resultPage;
        } else {
            // Handle the case when Enable is set to 'No'
            return $this->_redirect('/');
        }
    }
}

