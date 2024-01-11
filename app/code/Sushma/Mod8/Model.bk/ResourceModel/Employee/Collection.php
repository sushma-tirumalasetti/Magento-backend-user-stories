<?php
namespace Sushma\Mod8\Model\ResourceModel\Employee;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Sushma\Mod8\Model\EmployeeModel;
use Sushma\Mod8\Model\ResourceModel\EmployeeResourceModel;

class Collection extends AbstractCollection{
    protected function _construct(){
        $this->_init(EmployeeModel::class,EmployeeResourceModel::class);
    }
}
