<?php
namespace Sushma\Mod2\Plugin\Html;

use Magento\Theme\Block\Html\Footer;

class FooterPlugin{

    public function aroundGetCopyright(Footer $subject, callable $proceed){
        return "My own Copyright";
    }
}
