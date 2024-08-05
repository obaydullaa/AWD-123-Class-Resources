<?php

/**
 * part: 01 Class and Object
 */

// class Student  {
//     public $name = "student"; // Class ar modde variable nile setake propery bole empne class ar modde methods nile seta ke mehods bole.
//     public $age = 27;
//     public $job = "Laravel Developer";

//     public function student () {
//         return "I am a Laravel Developer";
//     }
// }

// $stu = new Student();

// echo $stu->student() ."<br>";

// echo $stu->age;

// class Student {
//     public $name = "Obaydullla";
//     public $email = "obaydullla@gmail.com";
//     public $phone = 01755265017;

//     public function info () {
//         echo "My name is ". $this->name . " and email ". $this->email;
//     }

//     public function profileName () {
//         echo $this->info();
//     }


// }


// $profile = new Student;
// echo $profile->profileName(); // echo  => My name is Obaydullla and email obaydullla@gmail.com


/**
 * 06: Static Properties and mehtods 
 */

// class Dev {
//     public static $age = 50;
//     public static $name = "Obaydulla";

//     public static function name () {
//         return "My name is " . Dev::$name;
//     }

// }
// echo Dev::name();

// $out = New Dev;

// echo Dev::$age;
// echo "<br>";
// echo $out->age;


/**
 * Part 07 Const 
 */

 /**
 * 06: Static Properties and mehtods 
 */

// class Dev {
//     const AGE = 50;
//     const NAME = "Obaydulla";
//     public static $name = "Obaydulla";

//     public static function name () {
//         return "My name is " . Dev::NAME;
//     }

// }
// echo Dev::name();


/**
 *  part 08 ( construct, dectrudct ) Mazic or building methods;
 */

/**
 * construct, dectrudct  holo construct sobar upore call hobe hobe r  dectrudct  sobar niche call hobe maje baki golo method ba property thak be. 
 * construct and dectrudct ar khetre object ar instance create korle auto call hobe;
 * 
 *  */

// class Staff {
//     public  $name = "Obaydulla";

//     public function work() {
//         return "We are laravel Developer";
//     }

//     public function __construct() {
//         echo "<hr> I am construct <hr>";
//     }

//     public function __destruct() {
//         echo "<hr> I am Destruct <hr>";
//     }


// }

// $staff = new Staff();


// echo $staff->work();
// echo "<br>";
// echo $staff->name;


/**
 * OOP part 10 ( extends or inheritance ) 
 */

 
// class A {
//     public function dev() {
//         echo "I am Python Developer";
//     }
//     public function food() {
//         echo "I am Love Food";
//     }
// }


// class B extends A {
//     public function learn() {
//         echo "I Love learn Laravel ";
//     }
// }


// $b = new B();

// echo $b->dev();



/**
 * OOP part 11 ( multi extends )
 */

// class A {
//     public function dev() {
//         echo "I am Python Developer";
//     }
//     public function food() {
//         echo "I am Love Food";
//     }
// }


// class B extends A {
//     public function learn() {
//         echo "I Love learn Laravel ";
//     }
// }

// class C extends B {
//     public function read() {
//         // echo "I am mehtod of C"; 

//         // echo  $this->dev();
//         echo  parent::learn();
//     }
// }

// $b = new  C();

// echo $b->read();


/**
 * OOP part 12 ( extends 2 ) method over ridin
 */

// class A {
//     public function dev() {
//         echo "I am Python Developer";
//     }
//     public function food() {
//         echo "I am Love Food";
//     }
// }


// class B extends A {
//     public function learn() {
//         echo "I Love learn Laravel ";
//     }
//     public function dev() {
//         echo "I am Flatter Developer";
//     }
// }

// class C extends B {

//     public function dev() {
//         echo "I am jango Developer";
//     }
//     public function read() {
//         echo "I am mehtod of C"; 

//         // echo  $this->dev();
//         // echo  parent::learn();
//     }
// }

// $b = new  C();

// echo $b->dev();



/**
 * OOP part 13 ( public, private, protected )
 * Public jakono way used kora jbe
 * Private oi class ar baire use korte hole private method ar modde diye jaite hobe.
 * protected only extends kore use kora jabe.
 */

class Family {

    protected function age() {
        echo "I am 27 Year Old.";
    }

    public function boyos() {
        // $this->age();
        
    }

}

class Publicc extends Family {

    public function learn() {
        echo $this->age();
    }

}


// $fa = new Family;
// $fa->age();

$fa = new Publicc;
$fa->learn();