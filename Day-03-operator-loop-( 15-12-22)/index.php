<?php 
/*
    PHP Part-18: string data with variables
*/

$name = 'obaydul';
$age = 20;
$job = 'Frontend Developer';

// write variable in single quote 
// echo 'my name is ' .$name.' and I am a ' .$job. ' And I am ' .$age.' years old ';

// echo "\n";
// write variable in dubble quote 

// waye one 
// echo " my name is " .$name." and I am a " .$job. " And I am " .$age." years old ";

// waye-2 
// echo " my name is $name and I am a $job And I am $age years old ";


// echo 'I\'m Obaydul';
/* 
    PHP Part-19: math  
*/

// $alo = 200;
// $mass = 200;
// $peyz = 400;

// $mot = $alo + $mass + $peyz;

// echo  "Sorbo Mot Bazar $mot kora hoise";

/*
    PHP Part-20: Operator

    1. Arithmetic Operator
    2. Assignment Operator
    3. Comparison Operator
    4. Increment/Decrement Operator
    5. Logical Operator
    6. String Operator
    7. Array Operator
*/
// 1. Arithmetic Operator
    //  + Addition 
    // - Subtraction
    // * Multiplication
    // / Division
    // % Modulus
    // ** Exponentiation

// 2. Assignment Operator: =

// 3. Comparison 
    // == 	Equal 
    // === 	Identical 
    // != 	Not equal 	
    // <> 	Not equal 	
    // !== Not identical 	
    // > 	Greater than 	
    // < 	Less than 	
    // <=> Spaceship

// 4. Increment/Decrement Operator : ++; --;
// 5. Logical Operator: && and; or ||; xor;!;  

// 6. String Operator: . ; .= ;

// 7. Array Operator:  + ; = ; ==; ! ; != ; <> ; !== ;

/**
 *  PHP Part: 21 ( ++-- )
 */

// $num = 10;
// $num++;
// $num++;
// $num++;
// $num++;

// $num--;
// $num--;
// $num--;

//  echo "The valu is $num" . " Okay";

/**
 * PHP Part: 22(if else)
 */

//  $age = 20;
//  if(true){
//     echo "You are Welcome";
//  }else {
//     echo "You are not welcome";
//  }


/**
 * PHP Part: 23 (Results Basic)
 */

// $name = "Obaydulla";
// $marks = 22;

// if($marks > 32){
//     echo "$name welcome for passed you are in Exam.";
// }else {
//     echo $name . " Sorry You are Failed in Exam.";
// }

/**
 * PHP Part: 24 (else-if)
 */

// $name = "Obaydulla";
// $marks = 883;

//  if($marks >=0 && $marks <= 32){
//     echo "<span style=\"color:red\">$name is Failed in the Exam.</span>";
// }else if($marks >=33 && $marks <= 39){
//     echo "<span style=\"color:orange\">$name is just passed in the exam.</span>";
// }else if($marks >=40 && $marks <= 49){
//     echo "<span style=\"color:blue\">$name is get C in the exam.</span>";
// }else if($marks >=50&& $marks <= 59){
//     echo "<span style=\"color:green\">$name is get B in the exam.</span>";
// }else if($marks >=60&& $marks <= 69){
//     echo "<span style=\"color:blue\">$name is get A- in the exam.</span>";
// }else if($marks >=70&& $marks <= 79){
//     echo "<span style=\"color:golden\">$name is get A in the exam.</span>";
// }else if($marks >=80&& $marks <= 100){
//     echo "<span style=\"color:skyblue\">$name is get A+ in the exam.</span>";
// }else {
//     echo "<span style=\"color:red\">You get Wrong number.</span>";
// }

/**
 * PHP Part: 25 (switch-case)
 */

$student = 7;

switch($student){
     case 3: 
        echo "You are gold member.";
        break;
     case 6: 
        echo "You are Sliver member.";
        break;
     case 10: 
        echo "You are Rupa member.";
        break;
     case 15: 
        echo "You are Hera member.";
        break;
        
        default:
            echo "Your are type wrong Number.";
        break;
    } 
