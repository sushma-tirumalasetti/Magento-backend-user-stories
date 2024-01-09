<?php
namespace Sushma\Mod8\Model\ResourceModel\CollectionClass;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Sushma\Mod8\Model\ModelClass;
use Sushma\Mod8\Model\ResourceModel\EmployeeResourceModel;

class Collection extends AbstractCollection{
    protected function _construct(){
        $this->_init(ModelClass::class,EmployeeResourceModel::class);
    }
}