<?php
namespace Sushma\Mod2\Plugin\Html;

use Magento\Theme\Block\Html\Header;

class  HeaderPlugin{
    public function aroundGetWelcome(Header $header,callable $proceed){
        return "Hello Hummingbird";
    }
}