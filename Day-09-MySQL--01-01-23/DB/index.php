<?php

/***
*
* MySQL part 08 (  db connection  )
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


 $network = new mysqli('localhost','rifat','asdfg','b329'); // connect database
//  $network -> query("CREATE DATABASE b329");  // Create Tab;e 

 $network -> query("CREATE TABLE users (
    id int(11),
    name varchar(100),
    age int(3),
    cell varchar(20),
   )");   



 