<?php

namespace Sushma\Mod8\Model;
use Magento\Framework\Model\AbstractModel;
use Sushma\Mod8\Model\ResourceModel\EmployeeResourceModel;

class EmployeeModel extends AbstractModel {
    protected function _construct() {
        $this->_init(EmployeeResourceModel::class);
    }
}
