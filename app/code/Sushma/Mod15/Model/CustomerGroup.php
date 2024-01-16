<?php
namespace Sushma\Mod15\Model;
use Magento\Framework\Model\AbstractModel;
use Sushma\Mod15\Model\ResourceModel\CustomerGroupResourceModel;

class CustomerGroup extends AbstractModel {
    protected function _construct() {
        $this->_init(CustomerGroupResourceModel::class);
    }
}
