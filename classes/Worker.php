<?php
namespace classes;
//require_once "Person.php";

abstract class Worker implements Person{
    private $company;
    
    function getCompany(){
        return $this->company;
    }
    protected function setCompany($company){
        $this->company=$company;    
    }
}
