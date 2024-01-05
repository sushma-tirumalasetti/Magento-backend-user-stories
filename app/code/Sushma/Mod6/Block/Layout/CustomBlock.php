<?php
namespace Sushma\Mod6\Block\Layout;
use Magento\Framework\View\Element\Template;


class CustomBlock extends Template{
    public function _toHtml()
    {
        return "My custom block says Hello to you";    
    }
    public function _afterToHtml($html){
        return $html;
    }
}   