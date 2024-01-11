<?php
namespace Sushma\Mod8\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class EmployeeResourceModel extends AbstractDb {
    protected function _construct(){
        $this->_init('employee_table', 'entity_id');
    }
}