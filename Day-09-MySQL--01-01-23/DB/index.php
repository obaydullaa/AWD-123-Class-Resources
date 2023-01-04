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


$network = new mysqli('localhost','obaydul', 123456);
// $network -> query("CREATE DATABASE sm"); // DB create
$network -> query("DROP DATABASE sm"); // DB create