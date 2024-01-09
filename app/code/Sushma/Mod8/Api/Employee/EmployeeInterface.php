<?php
namespace Sushma\Mod8\Api\Employee;

interface EmployeeInterface{
    public function getEmployeeId();
    public function setEmployeeId($employee_id);
    public function getFirstName();
    public function setFirstName($first_name);
    public function getLastName();
    public function setLastName($lastName);
    public function getEmployeeEmailId();
    public function setEmployeeEmailId($email_id);

}