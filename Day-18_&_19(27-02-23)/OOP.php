<?php
/** 
 * Date: 27-02-2023
 * ==================================================
 *  Object Oriented Programming - PHP 
 * 
 * - What is OOP & Why 
 * - class & Object 
 * - property & Method 
 * - Use property & Method out of a class
 * - Use property & Method in of a class
 * - static method & property & its use
 * - OOP constant 
 * - constract & Destract
 * 
 * 
        
*/



//class & Object 

// class
// class Student {
//     public $name = "Obaydul \n"; // Property


//     public function dev() {
//         echo "My Name is $this->name"; // Method
//     }

//     public function info() {
//         echo $this->dev();
//     }

//     public static function tomi() {
//         echo "I am Tomi.";
//     }

// }
// Object
// $stu = new Student;
// echo $stu->name;
// $stu->info();

// Student::tomi();

/**
 * static method & property & its use 
 * ====================================================
 */

//  class Student {
//     public static $name = "Obaydul \n"; // Property
//     public $AGE = 12;

//     public static function dev() {
//         echo "My Name is Obaydulla \n"; // Method
//     }

//     public function info() {
//         echo $this->dev();
//     }

//     public static function tomi() {
//         echo "I am Tomi.";
//     }

// }
// // Access static property and method.
// Student::dev();
// echo Student::$name;


/**
 * OOP constant 
 * ==================================
 */

//  class Student {
//    public const NAME = "Obaydul";

// }

// // Access constant property
// echo Student::NAME;


/**
 * - constract & Destract
 * =======================================================================
 * first run constract and last run destract middle run others.
 */

  class Student {
    public static $name = "Obaydul \n"; // Property
    public $AGE = 12;

    public function info() {
        echo "This body Information \n";
    }
    public function __destruct() {
        echo "My Name Is __destruct \n";
    }
    public function __construct(){
        echo "My Name Is __construct \n";
    }

}

$stu = new Student;

echo $stu->info();