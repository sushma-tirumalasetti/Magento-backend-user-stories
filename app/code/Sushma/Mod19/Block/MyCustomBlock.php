<?php
namespace Sushma\Mod19\Block;
use Magento\Catalog\Model\Product;
class MyCustomBlock extends \Magento\Checkout\Block\Cart\Sidebar{
    protected $cart;
    // protected $productModel;
    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Customer\Model\Session $customerSession, \Magento\Checkout\Model\Session $checkoutSession, \Magento\Catalog\Helper\Image $imageHelper, \Magento\Customer\CustomerData\JsLayoutDataProviderPoolInterface $jsLayoutDataProvider,  \Magento\Checkout\Model\Cart $cart,array $data = [], ?\Magento\Framework\Serialize\Serializer\Json $serializer = null)
    {
        $this->___init();
        parent::__construct($context, $customerSession, $checkoutSession, $imageHelper, $jsLayoutDataProvider, $data, $serializer);
        $this->cart = $cart;
    }
    public function getCartProductsAdded(){
        return $this->cart->getQuote()->getAllItems();
    }
    public function allCrossSellProducts(){
        $product=[];
        $productsArray = $this->getCartProductsAdded();
        foreach($productsArray as $pro){
            $productModel = $pro->getProduct();
            $crossSellProducts = $productModel->getCrossSellProducts();
            foreach($crossSellProducts as $item){
                $product[] = $item;
            }
            //
        }
        return $product;
    }
}