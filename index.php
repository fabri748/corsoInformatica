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
use classes\School;




echo "<h1>Hello world</h1>";

$allievo = new Student("Giuseppe Rossi","34", "prova@prova.com");
$allievo->addCourse(new Course("Astronomy",66));
echo $allievo;  
echo "</br>";
$allievo2 = new Student("Roberto Verdi","15", "prova123@prova123.com");
$phy = new Course("Physics",66);
$allievo2->addCourse($phy);
echo $allievo2;

$school = new School("Cambridge");
$school->addStudent($allievo);
$school->addStudent($allievo2);
$docente = new Teacher("Mario Rossi","99", "prova@prova.com", "Apple", $school);
$docente ->setCourse($phy);
echo $docente;
echo "<br>i suo studenti sono:<br>";

foreach($docente->getStudents() as $stud){
    echo $stud.", ";
}
