<?php
namespace Sushma\Mod7\Block;
use Magento\Framework\View\Element\Template;

class Message extends Template{
    // public function __construct(
    //     Template\Context $context,
    //     array $data = []
    // ) {
    //     parent::__construct($context, $data);
    // }
    public function _tohtml(){
        $html = parent::_toHtml();
        $html .= $this->_afterToHtml($html);
        return $html;
    }
    
    public function _afterToHtml($result){
        return "<div>my Additional message displayed via block method</div>";
    }

}