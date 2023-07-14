<?php

abstract class Employee {
    /*Tạo một abstract class "Employee" (Nhân viên) với các thuộc tính trừu tượng như "name" (tên) và "salary" (mức lương), 
    có một phương thức trừu tượng là "getInformation". Tạo các lớp con "Manager" (Quản lý) và 
    "Staff" (Nhân viên) kế thừa từ lớp Employee và triển khai các thuộc tính và phương thức theo cách riêng của từng lớp.*/
    protected $name;
    protected $salary;

    public function __construct($name, $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }

    abstract public function getInformation();
}

class Manager extends Employee {
    protected $department;

    public function __construct($name, $salary, $department) {
        parent::__construct($name, $salary);
        $this->department = $department;
    }

    public function getInformation() {
        $information = "Name: {$this->name}\n";
        $information .= "Salary: {$this->salary}\n";
        $information .= "Department: {$this->department}\n";
        return $information;
    }
}

class Staff extends Employee {
    protected $position;

    public function __construct($name, $salary, $position) {
        parent::__construct($name, $salary);
        $this->position = $position;
    }

    public function getInformation() {
        $information = "Name: {$this->name}\n";
        $information .= "Salary: {$this->salary}\n";
        $information .= "Position: {$this->position}\n";
        return $information;
    }
}

// Create a Manager object
$manager = new Manager("Lan", 7000, "Sales");
$managerInfo = $manager->getInformation();
print "Manager Information:\n" . $managerInfo . "\n";

// Create a Staff object
$staff = new Staff("Lani", 3000, "Assistant");
$staffInfo = $staff->getInformation();
print "Staff Information:\n" . $staffInfo . "\n";

?>
