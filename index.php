<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

spl_autoload_register(function($class_name) {
require_once $class_name.".php";
});

//require_once "classes/Student.php";
//require_once "classes/Teacher.php";
//require_once "classes/Worker.php";
//require_once "classes/Course.php";
use classes\Student;
use classes\Teacher;
use classes\Worker;
use classes\Course;




echo "<h1>Hello world</h1>";

$allievo = new Student("Giuseppe Rossi","34", "prova@prova.com");
$allievo->addCourse(new Course("Astronomy",66));
 echo $allievo;       

$docente = new Teacher("Mario Rossi","99", "prova@prova.com", "Apple");
$docente ->setCourse(new Course("Physics",98));
echo $docente;
