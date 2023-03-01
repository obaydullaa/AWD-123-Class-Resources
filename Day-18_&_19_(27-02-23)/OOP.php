<?php


// All content
/**
 *    // Object Oriented Programming - PHP 
    	
        - What is OOP & Why 
        - class & Object 
        - property & Method 
        - Use property & Method out of a class 
        - Use property & Method in of a class 
        - static method & property & its use 
        - OOP constant 
        - constract & Destract 
        - Inheritance / Extends 
        - Acess Modifier
        - abstract class and method
        - Final class & final Method 
	- App structure with class 


        - Interface & Implements 
        - Traits
	- Method chaining 
	- Type Hint
        - Magic methods
		- __get()
		- __set()
		- __call()
		- __constract()
		- __destruct()
	
	// Image Upload helper class , , , 
	// Query String with method chaining 
	// Helper class 


 
        - Namespace 
        - Autoloading class 
        - PSR-4 - project orientation 
        - CRUD by OOP 

	- MVC
	- Design patern 
 */





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

//   class Student {
//     public static $name = "Obaydul \n"; // Property
//     public $AGE = 12;

//     public function info() {
//         echo "This body Information \n";
//     }
//     public function __destruct() {
//         echo "My Name Is __destruct \n";
//     }
//     public function __construct(){
//         echo "My Name Is __construct \n";
//     }

// }

// $stu = new Student;

// echo $stu->info();


/**
 * Inheritance / Extends
 * =================================================
 */

//    class Student {
//     public static $name = "Obaydulla \n"; // Property
//     public $AGE = 12;

//     public function eat() {
//         echo "I love eat. \n";
//     }
// }

// class Information {
//     public function info() {
//         echo "I am obaydulla and i am a frontend developer. \n";
//     }
// }

// class AllInfo extends Information {
//     public function allData () {
//         echo "Im am allInfo method.";
//     }
// }

// $totto = new AllInfo;

// $totto->info(); 

// $st = new Student;

// echo $st::$name;


/**
 * OOP part 11 ( multi extends )
 * ===================================================
 */

//  class A {
//     public function funcA(){
//         echo "I am class A \n";
//     }
//  }


//  class B extends A {
//     public function funcB(){
//         echo parent::funcA();
//     }
//  }
//  class C extends B {
//     public function funcC(){
//         // echo "I am class C \n";
//         // echo $this->funcA();
//         echo parent::funcB();
//     }
//  }


//  $b = new B;
//  $b->funcB();

//  $c = new C;
//  $c->funcB();
//  $c->funcC();

 /**
  * OOP part 12 -- Method overriding ( extends 2 )
  *=====================================================

  */

//    class A {
//     public function funcA(){
//         echo "I am class A \n";
//     }
//  }


//  class B extends A {
//     public function funcB(){
//         echo parent::funcA();
//     }
//     public function funcA(){  // Method overriding
//         echo "I am class A -- & in B \n";
//     }
//  }
//  class C extends B {
//     public function funcC(){
//         echo parent::funcB();
//     }
    
//     public function funcA(){  // Method overriding
//         echo "I am class A -- & in C \n";
//     }
//  }


//  $c = new C;
//  //  $c->funcB();
//   $c->funcA();

/**
 * OOP part 13 ( public, private, protected ) //Acess Modifier
 * =============================================================
 * 
 * 
 */


// Public and Private

// class A {
//     private function funcA(){
//         echo "I am class A \n";
//     }
//     public function funcAA(){
//         echo $this->funcA();
//     }
// }


//  class B extends A {
//     public function funcB(){
//         // echo "I am class B \n";

//         // echo parent::funcA();
//     }

//  }


//  $a = new A;
//  $a->funcAA();

//  $a = new B;
//  $a->funcA();

// Protected

// class A {
//     private function funcA(){
//         echo "I am class A \n";
//     }

//     protected function funcAA(){
//         echo "I am class AA \n";
//     }
    
//     protected function funcAAP(){
//         echo $this->funcAA();
//     }

    
// }


//  class B extends A {
//     public function funcB(){
//         echo parent::funcAA();
//     }

//  }


//  $a = new B;
//  $a->funcAA();

//  $a = new A;
//  $a->funcAAP();


//  $a = new B;
//  $a->funcB();
 

/**
 * OOP part 14 ( final class and abstract class )
 * =================================================================
 * abstract class: don't create object it use only extends
 * final class : don't extends because it's a final class.
 */

// abstract class
// abstract class A {
//     public function funcA(){
//         echo "I am class A \n";
//     }
// }

//  class B extends A {
//     public function funcB(){
//         echo parent::funcA();
//     }
//  }

// // $a = new A; 
// // $a->funcA();

// $a = new B; 
// $a->funcA();


// Final class
// class A {
//     public final function funcA(){
//         echo "I am class A \n";
//     }
// }

//  class B extends A {
//     public function funcA(){
//         echo "I am class B \n";
//     }
// }
 

// // $a = new A; 
// // $a->funcA();

// $a = new B; 
// $a->funcA();


/**
 * OOP part 15 ( Basic crud 1 )
 * ====================================================================
 * 
 * 
 * 
 */


//  File ready for crud project

/**
 * OOP part 16 ( Database class design )
 * ===================================================================
 * 
 */
// create database and folder structure

/**
 * OOP part 17 ( Add form design )
 * ===========================================
 */