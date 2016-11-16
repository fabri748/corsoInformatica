<?php

namespace classes;

class School {
    private $name;
    private $students;
    
public function __construct($name){
        $this->name= $name;  
    }
public function getStudents(){
        return $this->students;
    }
public function addStudent(Student $student){
    $this->student = $student;  
    }
}