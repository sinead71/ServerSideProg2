<?php 
class Employee{
    public $name;
    public $empNo;
    public $yearsService;
    public $salary;
    public $pension;
    
    public function __construct($name, $empNo, $yearsService, $salary){
        $this->name = $name;
        $this->empNo = $empNo;
        $this->yearsService = $yearsService;
        $this->salary = $salary; 
        
        echo $this->name;
        echo('<br>');
        echo $this->empNo;
        echo('<br>');
        echo $this->yearsService;
        echo('<br>');
        echo $this->salary;
    }
    
    protected function clockIn($empNo, $time = '09:00'){
        //save to database
    }
    
    private function pension ($yearsService, $salary){
        $this->pension = $yearsService * $salary;
    }
}

class ProjectManager extends Employee{
    function __construct($name1, $empNo1, $yearsService1, $salary1){
        parent::__construct($name1, $empNo1, $yearsService1, $salary1);
        
    }
    
    public function manageProject($title, $department, $endDate){
        //manage the project
    }
}

$emp = new Employee('John', '0123', '5', '£30,000');


?>