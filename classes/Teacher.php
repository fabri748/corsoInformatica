<?php

require_once "DigitalUser.php";
require_once "Worker.php";

class Teacher extends Worker {
    
    use DigitalUser;
    
    private $name;
    private $age;
    private $course;
    
    function getName(){}
    function setName($name){}
    function getAge(){}
    function setAge($age){}
        
    public function getCourse(){
        return $this->course;
    }
    public function addCourse(Course $course){
       $this->course = $course;   
    }
    public function __construct($name, $age, $email, $course=null){
        $this->name= $name;         
        $this->age= $age;         
        $this->email= $email;
    }
    public function __toString(){
            $output = "Name teacher: ". $this->name ."<br>";
            $output .= "Age teacher: ". $this->age ."<br>";
            $output .= "Email teacher: ". $this->email ."<br>";
            return $output;
        }
}

