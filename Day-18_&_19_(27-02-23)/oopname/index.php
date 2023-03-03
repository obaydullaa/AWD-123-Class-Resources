<?php

include "App/Controllers/Student.php";
include "App/Support/Student.php";

use App\Controllers\Student as ControllerStudent;
use App\Support\Student as SupportStudent;

$controllerStudent = new ControllerStudent;
$supportStudent = new SupportStudent;

$controllerStudent->info();
$supportStudent->info();
