<?php

include_once "vendor/autoload.php";

use App\Controllers\Student;
use App\Support\Student as SupportStudent;

$stu = new Student;
$sti = new SupportStudent;

$stu -> info();
$sti -> info();