<?php

$connection = new mysqli('localhost','root','', 'raj');

$sql = "CREATE TABLE Users(
    id int AUTO_INCREMENT,
    name varchar(100),
    age int(3),
    cell varchar(15),
    PRIMARY KEY (id)
)";

$connection->query($sql);