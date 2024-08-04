<?php



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



class Dev {
    public static $age = 50;
    public static $name = "Obaydulla";

    public static function name () {
        return "My name is " . Dev::$name;
    }

}
echo Dev::name();

// $out = New Dev;

// echo Dev::$age;
// echo "<br>";
// echo $out->age;