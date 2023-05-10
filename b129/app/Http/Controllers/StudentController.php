<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function ageCal($name, $year) {
        
        $age = 2023 - $year;
        echo "My name is {$name} age is {$age} year old";
    }
}
