<?php
namespace Sushma\Mod8\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Sushma\Mod8\Model\EmployeeModelFactory;
use Sushma\Mod8\Model\ResourceModel\EmployeeResourceModelFactory;


class SaveController extends Action {
    protected $request;
    protected $modelFactory;
    protected $resourceModelFactory;

    public function __construct(
        Context $context,
        \Magento\Framework\App\Request\Http $request,
		EmployeeModelFactory $modelFactory,
		EmployeeResourceModelFactory $resourceModelFactory	 
    ){
        parent::__construct($context);
        $this->request=$request;
        $this->modelFactory=$modelFactory;
        $this->resourceModelFactory=$resourceModelFactory;
    }
    public function execute(){
        try{
            // dump($this->getRequest());
			$data = $this->getRequest()->getPostValue();
            // dump($data);
			$model= $this->modelFactory->create();
			$resourceModel = $this->resourceModelFactory->create(); 
			
			// $model->setData("first_name",array_key_exists("first_name",$data) ? $data["first_name"] : "");
            $model->setData("employee_id",$data['employee_id']);
            $model->setData("first_name",$data['first_name']);
			$model->setData("last_name",$data["last_name"]);
			$model->setData("email_id",$data["email_id"]);
			$model->setData("address",$data['address']);
			$model->setData("phone_number",$data['phone_number']);
            // dump($model);
            $resourceModel->save($model);
            $this->_redirect($this->_redirect->getRefererUrl());


		}catch(\Exception $e){
			
			throw $e;
		}
    }
}   