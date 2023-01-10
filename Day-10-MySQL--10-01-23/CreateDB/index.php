<?php

// $connection = new mysqli('localhost','root','', 'raj');

// $sql = "CREATE TABLE Users(
//     id int AUTO_INCREMENT,
//     name varchar(100),
//     age int(3),
//     cell varchar(15),
//     PRIMARY KEY (id)
// )";

// $connection->query($sql);


/**
 * MySQL part 13 (  INSERT 1  )
 */

 
$connection = new mysqli('localhost', 'root', '', 'student');
 $sql = "INSERT INTO users (name, age, cell) VALUES ('Obaydul', '30', '01755265017')";

 $connection->query($sql);