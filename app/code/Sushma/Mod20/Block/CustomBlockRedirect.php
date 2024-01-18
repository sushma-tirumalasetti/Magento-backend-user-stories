<?php
namespace Sushma\Mod20\Block;
use Magento\Catalog\Block\Product\View;
use Magento\Framework\Controller\Result\RedirectFactory;
use Magento\Catalog\Api\ProductRepositoryInterface;

class CustomBlockRedirect extends View{
    protected $urlBuilder;
    public function __construct(\Magento\Catalog\Block\Product\Context $context, \Magento\Framework\Url\EncoderInterface $urlEncoder, \Magento\Framework\Json\EncoderInterface $jsonEncoder, \Magento\Framework\Stdlib\StringUtils $string, \Magento\Catalog\Helper\Product $productHelper, \Magento\Catalog\Model\ProductTypes\ConfigInterface $productTypeConfig, \Magento\Framework\Locale\FormatInterface $localeFormat, \Magento\Customer\Model\Session $customerSession, \Magento\Catalog\Api\ProductRepositoryInterface $productRepository, \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency,\Magento\Framework\UrlInterface $urlBuilder, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $urlEncoder, $jsonEncoder, $string, $productHelper, $productTypeConfig, $localeFormat, $customerSession, $productRepository, $priceCurrency, $data);
        $this->urlBuilder = $urlBuilder;
    }
    // public function __construct(RedirectFactory $redirectFactory){
    //     // parent::__construct();
    //     $this->redirectFactory = $redirectFactory;
    // }
    // public function __construct(
    //     \Magento\Catalog\Block\Product\Context $context,
    //     \Magento\Framework\Url\EncoderInterface $urlEncoder,
    //     \Magento\Framework\Json\EncoderInterface $jsonEncoder,
    //     \Magento\Framework\Stdlib\StringUtils $string,
    //     \Magento\Catalog\Helper\Product $productHelper,
    //     \Magento\Catalog\Model\ProductTypes\ConfigInterface $productTypeConfig,
    //     \Magento\Framework\Locale\FormatInterface $localeFormat,
    //     \Magento\Customer\Model\Session $customerSession,
    //     ProductRepositoryInterface $productRepository,
    //     \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency,
    //     RedirectFactory $redirectFactory,
    //     array $data = []
    // ) {
    //     parent::__construct($productHelper
    //     ,$urlEncoder
    //     ,$jsonEncoder
    //     ,$productTypeConfig
    //     ,$string
    //     ,$localeFormat
    //     ,$customerSession
    //     ,$productRepository
    //     ,$priceCurrency
    //     ,$context
    //     ,$data);
    //     $this->redirectFactory = $redirectFactory;
    // }

    public function redirectContactUs(){
        return $this->urlBuilder->getUrl("contact"); 
    }

}