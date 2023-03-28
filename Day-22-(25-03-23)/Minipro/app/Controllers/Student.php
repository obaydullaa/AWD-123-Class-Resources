<?php 

namespace App\Controllers;

use App\Support\Database;

class Student extends Database {

    /**
     * create new student
     */
    public function createNewStudent($name, $email, $cell,$pass, $photo ) {
    //    return $this-> create();
    //    return parent::create();
    // echo "<pre>";

    $this -> create('student', [
        'name' => $name,
        'email' => $email,
        'cell' => $cell,
        'password' => $pass,
        'photo' => ''
    ]);


    }
    


}