<?php
require_once "Person.php";
require_once "DigitalUser.php";

class Student implements Person{
    
    use DigitalUser;
    
    private $name;
    private $age;
    private $courses;
    
    public function getCourses(){
        return $this->courses;
    }
    public function addCourse(Course $s){
       $this->courses = $s;   
    }
    public function resetCourses(){    
    }
    public function __construct($name, $age, $email, $courses=[]){
        $this->name= $name;         
        $this->age= $age;         
        $this->email= $email;
    }
    public function getName(){
        return $this->name;
    }
    public function setName($name){
        $this->name = $name;
    }
    public function getAge(){
        return $this->age;
    }
    public function setAge($age){
        $this->age = $age;
    }
    public function __toString(){
            $output = "Name: ". $this->name ."<br>";
            $output .= "Age: ". $this->age ."<br>";
            $output .= "Email: ". $this->email ."<br>";
            return $output;
        }
}

