<?php
/**
* MySQL part 01 ( basic )
*=============================
* MySQL and PHPAdmin panel Intro
* Done => 1---6
* MySQL part 07 ( db username ) create in PHP Myadmin.
* SQL => Structured Query Language.
* MySQL is 2 types: See Queel & No Seel Queel
* we write query write in double quotation -> query("CREATE DATABASE ");
*/
/***
*
* MySQL part 08 (db connection)
*/

// Server Connect
// mysql_connect(); // Old 
// mysql_select_db(); // Old

// mysqli_connect(); // new Not use
// new mysqli(); // new use it bcz it's oop
// new PDO(); // new use it bcz it's oop

/**
 * MySQL part 09 ( CREATE and drop )
 */

// $network = new mysqli('localhost','obaydul', 123456); // connect database
// $network -> query("CREATE DATABASE sm"); // DB create
// $network -> query("DROP DATABASE sm"); // DB Drop


/**
 * MySQL part 10 (  CREATE TABLE  )
 */


 $network = new mysqli('localhost','rifat','asdfg', 'Student'); // connect database
//  $network -> query("CREATE DATABASE Student");  // Create Table 

 $network -> query("CREATE TABLE users (
    id int(11),
    name varchar(100),
    age int(3),
    cell varchar(20)
   )");   



 