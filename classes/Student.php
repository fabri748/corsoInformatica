<?php
namespace classes;
//require_once "Person.php";
//require_once "DigitalUser.php";

class Student implements Person{
    
    use DigitalUser;
    
    private $name;
    private $age;
    private $courses=[];
    
    public function getCourses(){
        return $this->courses;
    }
    public function addCourse(Course $course){
       $this->courses[] = $course;   
    }
    public function resetCourses(){ 
        $this->courses=[];
    }
    public function __construct($name, $age, $email, $courses=[]){
        $this->name= $name;         
        $this->age= $age;         
        $this->email= $email;
        $this->courses=$courses;
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
        $courses ="";
            foreach ($this->courses as$course){
                $courses .= "($course),";
            }
            return "Name: ".$this->name."</br>Age: ".$this->age."</br>Course: [$courses]"."</br>";
    }
}

