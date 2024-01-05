<?php
declare (strict_types=1);
namespace Sushma\Mod6\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\View\LayoutFactory;

class Index implements ActionInterface{
    protected $pageFactory;
    protected $layout;
    public function __construct(PageFactory $pageFactory,LayoutFactory $layout){
        $this->pageFactory = $pageFactory;
        $this->layout = $layout;
        
    }
    public function execute(){
        $page = $this->pageFactory->create();
        $block = $page->getLayout()->createBlock("Sushma\Mod6\Block\Layout\CustomBlock");
        $html = $block->toHtml();
        $page->getConfig()->getTitle()->set($html);
        return $page;


        

        
    }


}