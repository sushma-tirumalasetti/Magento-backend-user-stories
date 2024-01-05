<?php
namespace Sushma\Mod6\Plugin;
use Magento\Catalog\Block\Product\View\Description;
class   CustomDescription{
        public function aroundGetProduct(Description $product, callable $proceed){
            // $attribute = $proceed();
            // $attribute->setText('sample description');
            // return $attribute;
            $product = $proceed();
            $product->setDescription('sample description that i have done via a plugin');
            return $product;
        }
}