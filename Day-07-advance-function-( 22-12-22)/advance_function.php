<?php
/**
 * PHP part: 52 ( md5, password_hash, rand, str_shuffle, substr )
 * ==================================================================
 * 
 * 1. md5() => Calculates the MD5 hash of a string.
 * 2. password_hash($var,PASSWORD_DEFAULT) => Creates a password hash
 * 3. rand  => Create random number.
 * 4. str_shuffle => Randomly shuffle all characters of a string.
 * 5. substr => The substr() function returns a part of a string.
 * 6. time => In 1970 return second.
 * 7. date => Use for date.
 * 8. mail => Use for mail.
 * 9. explode => string type data convert to array.
 * 10.implode => More Array convert string.
 * 11. include => include file
 * 12. require => include file
 * 13. include_once => only one time load.
 * 14. require_once => only one time load.
 * 15. file_exists => file exists use when file exists.
 * if(file_exists('content.php')){
    include 'content.php';
}
* 16. undefined variable => not set value; $name;
* 17. flag variable      => Variable declare but not set variable; $name = '';
* 18. array variable     =>  variable declare and array sing use. $name[] = 'obaydul';
*
*
*
*
 */

// $name =  'Obaydulla';
// $pass = '123abc';

// echo md5($pass);
// echo password_hash($pass,PASSWORD_DEFAULT); 
// echo rand(1000, 9999);
// $code = str_shuffle($name);
// echo substr($code,5,5);

/**
 * PHP part: 53 ( md5, password_hash, rand, str_shuffle, substr )
 * =================================================================
 */


//  echo time();
//  echo date('D-F-Y');
//  echo date('F d').'th, '. date('Y')."<br>";
//  date_default_timezone_set('Asia/Dhaka');
//  echo date('g:h:i:s a').'<br>';
//  echo mail('text@gmail.com','Subject->Tes','Hello');


/**
 * PHP part: 54/55 ( explode 1 & 2)
 * =================================================================
 */

//  $text = 'My name is obaydulla, I am dev, I love Python';

// $cutArr =  explode('y' , $text);

// echo '<pre>';
// print_r($cutArr);
// echo '</pre>';

/**
 * PHP part: 56(Implode)
 * =================================================================
 */

//  $food = ['apple','orange','potato'];

//  echo implode(' ', $food);

/**
 * PHP part: 57(include, require)
 * =================================================================
 */

//  require_once 'content.php';
//  require_once 'heading.php'; 

 /**
 * PHP part: 58( file_exits)
 * =================================================================
 */

// if(file_exists('content.php')){
//     include 'content.php';
// }

 /**
 * PHP part: 59( undefined, flag, array variable)
 * =================================================================
 */

// $name[] = 'obaydul';
// $name[] = 'a';
// $name[] = 'd';
// $name[] = 'c';

//  echo '<pre>';
//  print_r($name) ;

 /**
 * PHP part: 60 ( isset, empty, die  )
 * =================================================================
 *  isset => check value set or not.
 * empty  => check value empty or not.
 * die    => 
 */

$name ='';

if(isset($name)){
    echo 'value is set';
} else {
    echo 'value is not set';
}
echo "<br>";
if(empty($name)){
    echo 'value is empty';
} else {
    echo 'value is not empty';
}
echo "<br>";