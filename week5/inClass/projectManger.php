<?php 
class ProjectManager extends Employee{
    function __construct($name1, $empNo1, $yearsService1, $salary1){
        parent::__construct($name1, $empNo1, $yearsService1, $salary1);
    }
    
    public function manageProject($title, $department, $endDate){
        //manage the project
    }
}

$obj = new ProjectManager();
echo ProjectManager;
?>