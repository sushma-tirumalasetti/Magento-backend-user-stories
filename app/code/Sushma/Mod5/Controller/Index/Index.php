<?php
declare (strict_types=1);
namespace Sushma\Mod5\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\Controller\Result\RedirectFactory;

class Index implements ActionInterface{
    protected $pageFactory;
    protected $resultRedirectFactory;
    public function __construct(PageFactory $pageFactory, RedirectFactory $resultRedirectFactory){
        $this->pageFactory = $pageFactory;
        $this->resultRedirectFactory = $resultRedirectFactory;
    }
    public function execute(){
        $resultRedirect = $this->resultRedirectFactory->create();
        $productId = 1; // Replace with your specific product ID
        $resultRedirect->setPath('catalog/product/view', ['id' => $productId]);
        return $resultRedirect;
        // $page = $this->pageFactory->create();
        // $page->getConfig()->getTitle()->set("Hello World");
        // return $page;

        
    }
//     public function execute()
// {
//     $resultRedirect = $this->resultRedirectFactory->create();
//     $productId = 123; // Replace with your specific product ID
//     $resultRedirect->setPath('catalog/product/view', ['id' => $productId]);
//     return $resultRedirect;
// }

}