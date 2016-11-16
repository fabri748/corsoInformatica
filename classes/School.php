<?php

namespace classes;

class School {
    private $name;
    private $students = [];
    
public function __construct($name){
        $this->name= $name;
        $this->students = [];
    }
public function getStudents(){
        return $this->students;
    }
public function addStudent(Student $student){
    $this->students[] = $student;  
    }
function __toString(){
    return "Nome Scuola: $this->name, Studenti: ". count($this->getStudents());
}
}