<?php
namespace Sushma\Mod7\Controller\Product;
use Magento\Framework\App\ActionInterface;
use Magento\Framework\View\Result\PageFactory;
class LayoutChange implements ActionInterface
{
    protected $resultPageFactory;

    public function __construct(PageFactory $resultPageFactory)
    {
        $this->resultPageFactory = $resultPageFactory;
    }

    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        $resultPage->getConfig()->setPageLayout('3columns');
        return $resultPage;
    }
}
