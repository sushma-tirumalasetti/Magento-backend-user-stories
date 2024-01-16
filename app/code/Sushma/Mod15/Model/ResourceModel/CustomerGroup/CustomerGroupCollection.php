<?php 

namespace Sushma\Mod15\Model\ResourceModel\CustomerGroup;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Sushma\Mod15\Model\CustomerGroup;
use Sushma\Mod15\Model\ResourceModel\CustomerGroupResourceModel;

class CustomerGroupCollection extends AbstractCollection {
    public function _construct() {
        $this->_init(CustomerGroup::class, CustomerGroupResourceModel::class);
    }
}
