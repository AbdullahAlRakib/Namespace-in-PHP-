<?php
require_once './Student.php';
//$a=new App\classes\Student();//process 1
use\app\classes\student;//process 2
$a=new student('hello');
$a->test();
//use\App\classes\Student;
//Student::test();
