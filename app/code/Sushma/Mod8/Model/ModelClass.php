<?php 
namespace Sushma\Mod8\Model;
use Magento\Framework\Model\AbstractModel;
use Sushma\Mod8\Api\Employee\EmployeeInterface;
use Sushma\Mod8\Model\ResourceModel\EmployeeResourceModel;

class ModelClass extends AbstractModel implements EmployeeInterface{
    public $employee_id;
    public $employee_firstName;
    public $employee_lastName;
    public $employee_emailId;
    public function _construct(){
        $this->_init(EmployeeResourceModel::class);
    }
    public function getEmployeeId(){
        return $this->employee_id;
    }
    public function setEmployeeId($employee_id){
        $this->employee_id = $employee_id;
    }
    public function getFirstName(){
        return $this->employee_firstName;
    }
    public function setFirstName($first_name){
        $this->employee_firstName = $first_name;
    }
    public function getLastName(){
        return $this->employee_lastName;
    }
    public function setLastName($lastName){
        $this->employee_lastName = $lastName;
    }
    public function getEmployeeEmailId(){
        return $this->employee_emailId;
    }
    public function setEmployeeEmailId($email_id){
        $this->employee_emailId = $email_id;
    }
}

