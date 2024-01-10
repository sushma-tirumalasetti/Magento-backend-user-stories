<?php
namespace Sushma\Mod8\Block;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Sushma\Mod8\Model\ResourceModel\Employee\EmployeeCollection;

class TableBlock extends Template{
    protected $collection;
    public function __construct(Context $context, EmployeeCollection $collection,array $data=[]){
        parent::__construct($context, $data);
        $this->collection = $collection;
    }
    public function getEmployeeDetails(){
        // dump($this->collection);
        return $this->collection;
    }
}