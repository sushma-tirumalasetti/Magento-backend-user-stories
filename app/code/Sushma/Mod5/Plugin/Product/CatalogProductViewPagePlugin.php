<?php
namespace Sushma\Mod5\Plugin\Product;

class CatalogProductViewPagePlugin
{
    public function afterGetProduct(\Magento\Catalog\Block\Product\View $subject, $result)
    {
        $result->setName("My cutom product name ");
        // dump($result->getName());
        return $result;
    }
}

