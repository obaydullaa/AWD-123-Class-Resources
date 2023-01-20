<?php

/**
 * Make a Database connection
 */

 $host = 'localhost';
 $user = 'root';
 $pass = '';
 $db = 'stc';

 function connect() {
    global $host, $user, $pass, $db;
     return $connection = new mysqli($host, $user, $pass, $db);
 }
