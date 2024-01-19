<?php

namespace Sushma\Mod16\Controller\Index;

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
    }
}