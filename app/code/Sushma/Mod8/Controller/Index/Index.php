<?php
declare (strict_types=1);

namespace Sushma\Mod8\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\App\Request\Http;

class Index implements ActionInterface{

    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    protected $resultFactory;
    protected $request;

    /**
     * @param \Magento\Framework\View\Result\PageFactory $resultFactory;
     */

    public function __construct(\Magento\Framework\View\Result\PageFactory $resultFactory, Http $request){
        $this->resultFactory = $resultFactory;
        $this->request = $request;
    }

    public function execute(){
        $page = $this->resultFactory->create();
        $postData = $this->request->getPostValue();
        dump($postData);
        return $page;
    }
}   



















// namespace Sushma\Mod8\Controller\Index;

// use Magento\Framework\App\Action\Context;
// use Magento\Framework\App\ActionInterface;
// use Magento\Framework\View\Result\PageFactory;
// use Psr\Log\LoggerInterface;
// use Sushma\Mod8\Model\EmployeeModelFactory;
// use Sushma\Mod8\Model\ResourceModel\EmployeeResourceModelFactory;

// class Index implements ActionInterface
// {
// 	protected $_pageFactory;
// 	// protected $context;
// 	public $logger;
// 	protected $request;
// 	protected $modelFactory;
// 	protected $resourceModelFactory;
// 	public function __construct(
// 		// Context $context,
// 		\Magento\Framework\App\Action\Context $context,
// 		\Magento\Framework\View\Result\PageFactory $resultPageFactory,
// 		array $data = [])
// 	{
// 		// $this->request = $request;
// 		// $this->_pageFactory = $pageFactory;
// 		// $this->modelFactory = $modelFactory;
// 		// $this->resourceModelFactory = $resourceModelFactory;
// 		// $this->logger=$logger;
// 		$this->_resultPageFactory = $resultPageFactory;
//        parent::__construct($context);
// 	}

// 	public function execute()
// 	{
// 		$page = $this->_pageFactory->create();
// 		// return $page;
// 		try{
// 			$data = $this->request->getPostValue();
// 			// var_dump($data);
// 			$model= $this->modelFactory->create();
// 			$resourceModel = $this->resourceModelFactory->create(); 
// 			// foreach ($data as $key => $value) {
// 			// 	dump($key,$value);
// 			// 	$model->setData($key, $value);
// 			// }
// 			// $model->setData($data);
// 			// $model->setFirstName($model->getFirstName()."");
// 			// $model->setLastName($model->getLastName()."");
// 			// $model->setEmailId($model->getEmailId()."");
// 			// $model->setData("employee_id",$data["employee_id"],"last_name",);
// 			$model->setData("first_name",array_key_exists("first_name",$data) ? $data["first_name"] : "");
// 			$model->setData("last_name",array_key_exists("last_name",$data)?$data["last_name"]:"");
// 			// // $model->setFirstName($model->getFirstName() . "__0");
// 			// $model->setData("last_name",$data["last_name"]);
// 			// $model->setData("email_id",$data["email_id"]);
// 			// $model->setData("address",$data['address']);
// 			// $model->setData("phone_number",$data['phone_number']);
// 			// dump($data);
// 			// $model->save();
// 			// $resourceModel->save($model);
// 			// $this->logger->info("..........logger Info",[$data]);
			

// 		}catch(\Exception $e){
// 			// $this->messageManager->addErrorMessage($e,__("We can't submit your request"));
// 			throw $e;
// 		}
// 		return $page;
// 	}
// }