<?php

namespace Sushma\Mod8\Block;
use Magento\Framework\View\Element\Template;
class CustomForm extends Template{
    protected $_urlBuilder;

   public function __construct(
       \Magento\Framework\View\Element\Template\Context $context,
       array $data = []
   ) {
       $this->_urlBuilder = $context->getUrlBuilder();
       parent::__construct($context, $data);
   }

   public function getFormActionUrl()
   {
       return $this->_urlBuilder->getUrl('userstory8/index/index');
   }
}