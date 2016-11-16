<?php
namespace classes;
//require_once "DigitalUser.php";
//require_once "Worker.php";

class Teacher extends Worker {
    
    use DigitalUser;
    
    private $name;
    private $age;
    private $course;
    private $school;
    
    function getName(){}
    function setName($name){}
    function getAge(){}
    function setAge($age){}
        
    public function getCourse(){
        return $this->course;
    }
    public function setCourse(Course $course){
       $this->course = $course;   
    }
    public function getSchool(){
        return $this->school;
    }
    public function setSchool(School $school){
       $this->school = $school;   
    }
    public function __construct($name, $age, $email, $company, $school, $course=null){
        $this->name= $name;         
        $this->age= $age;         
        $this->email= $email;
        $this->company= $company;
        $this->school= $school;
        $this->course=$course;
        
    }
    public function __toString(){
            $output = "</br>Name teacher: ". $this->name ."<br>";
            $output .= "Age teacher: ". $this->age ."<br>";
            $output .= "Email teacher: ". $this->email."</br>";
            $output .= "Company: ". $this->company."</br>";
            $output .= "School: ". $this->school."</br>";
            $output .= "</br>Course: ". $this->course;
            return $output;
        }
        
    function getStudents() {
        $st = [];
        
        if($school = $this->getSchool()){
            foreach ($school->getStudents() as $student){
                if(in_array($this->course, $student->getCourses())){
                    $st[] = $student;
                }
            }
        }
        return $st;
    }
}

