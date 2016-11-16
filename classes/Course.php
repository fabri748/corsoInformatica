<?php
namespace classes;

class Course{
    private $name;
    private $hours;
    
    
    public function getName(){
        return $this->name;
    }
    public function setName($name){
       $this->name = $name;   
    }
    public function getHours(){
        return $this->hours;
    }
    public function setHours($hours){
       $this->hours = $hours;   
    }
    public function __construct($name, $hours){
        $this->name= $name;         
        $this->hours= $hours;         
    }
    public function __toString(){
            $output = "Name course: ". $this->name ."<br>";
            $output .= "Course hours: ". $this->hours ."<br>";
            return $output;
        }
}

