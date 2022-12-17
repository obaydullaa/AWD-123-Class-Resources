<?php

/**
 * PHP Part: 33(String Function - 2 )
 */

// $text = "My name is Obaydulla.";

// echo strtoupper($text);
// echo "\n";

// echo strtolower($text);
// echo "\n";

// echo strlen($text);
// echo "\n";

// echo str_word_count($text);
// echo "\n";

// echo ucwords($text);
// echo "\n";

// echo str_replace("Obaydulla","Rifat", $text);
// echo "\n";

// echo strrev($text);
// echo "\n";

// echo strpos($text,"a");
// echo "\n";

/**
 * PHP Part: 34 (User define function)
 */


// function obaydul(){
//     echo "My name is Obaydulla.";
// }
// obaydul();


/**
 * PHP Part: 35 (function-2)
 */


// function devInfo($name = 'Obaydulla', $prof = 'Frontend Developer'){
//     echo "My name is $name, I am Js $prof Developer."."\n";
// }
// devInfo('Rifat','Java');
// devInfo('Nur', 'Python');
// devInfo();

/**
 * PHP Part: 36 (function-3)
 */


// function info(string $name, int $birth_year) {
//     $age =date('Y') - $birth_year;
//     echo "Hello $name You are $age year old","\n";
// }

// info(666, 2003);


/**
 * PHP Part: 37 (function-4)
 */

//  function info(){
//     return "Obaydulla";
//  }

//  echo info();

/**
 * PHP Part: 38 (boroHat)
 */

// function boroHat($text){
//    return "<span style=\"text-transform:uppercase; \">" .$text. "</span>"."<br>";
// }

// echo boroHat("My Name is Obaydulla");

// function sotoHat($text){
//    return "<span style=\"text-transform:lowercase; \">" .$text. "</span>";
// }

// echo sotoHat("My Name is Obaydulla");

/**
 * PHP Part: 39 (Milti Hat)
 */

//  function maltiHat($text, $hat = 'b'){
//    if($hat == 'b'){
//       return "<span style='text-transform:uppercase'> $text </span>";
//    } else if($hat == 'c') {
//       return "<span style='text-transform:lowercase'> $text </span>";
//    } else {
//       return "::Kalo Hat::";
//    }
// }

// echo maltiHat("ObayDullA");


/**
 * PHP Part: 40 (Heading Function);
 */

// function bigHeading($head, $tag = 'h1',$align = 'center', $color = '#000'){
//       echo "<$tag style=\"text-align: $align; color:$color\"> $head </$tag>";
  
// }


//  bigHeading("Obaydullla",'h1', 'center', 'red');
//  bigHeading("IslamObaydulla",'h1', 'center', 'blue');


/**
 * PHP Part: 41 (Result system by function);
 */

 function getResults($marks){
   $gpa = '';
   $grade = '';
   if($marks >= 0 && $marks <=33){
      $gpa = 0;
      $grade = 'F';
   } else if($marks >= 33 && $marks <=39) {
      $gpa = 1;
      $grade = 'D';
   }else if($marks >= 40 && $marks <=49) {
      $gpa = 2;
      $grade = 'C';
   }else if($marks >= 50 && $marks <=59) {
      $gpa = 3;
      $grade = 'B';
   }else if($marks >=60 && $marks <=69) {
      $gpa = 3.5;
      $grade = 'A-';
   }else if($marks >=70 && $marks <=79) {
      $gpa = 4;
      $grade = 'A';
   }else if($marks >=80 && $marks <= 100) {
      $gpa = 5;
      $grade = 'A+';
   }else {
      $gpa = 'Ivalid';
      $grade = 'Invalid';
   }
   return "GPS = $gpa AND Gramde = $grade";
 }

 echo getResults(88);