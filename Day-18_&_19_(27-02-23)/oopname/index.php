<?php

include "autoload.php";

// use App\Controllers\Student as ControllerStudent;
// use App\Support\Student as SupportStudent;

// $controllerStudent = new ControllerStudent;
// $supportStudent = new SupportStudent;

// $controllerStudent->info();
// $supportStudent->info();



use App\Controllers\Student;
use App\Support\Student as SupportStudent;

$stu = new Student;
$sti = new SupportStudent;

$stu -> info();
$sti -> info();