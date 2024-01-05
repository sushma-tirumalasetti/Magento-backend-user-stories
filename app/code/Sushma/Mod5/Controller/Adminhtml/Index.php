<?php
namespace YourNamespace\YourModule\Controller\Adminhtml\Index;

use Magento\Backend\App\Action;

class Index extends Action
{
    public function execute()
    {
        $access = $this->getRequest()->getParam('access');
        dump($access);
        if ($access !== 'true') {
            $this->_redirect('*/*/');
            return;
        }
        // Your admin controller logic here
    }
}
