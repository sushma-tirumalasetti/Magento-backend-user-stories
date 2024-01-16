<?php
namespace Sushma\Mod15\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class CustomerGroupResourceModel extends AbstractDb {
    protected function _construct(){
        $this->_init('customer_group_table_orders', 'id');
    }
}