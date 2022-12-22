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
 * 
 */

$name =  'Obaydulla';
$pass = '123abc';

// echo md5($pass);
// echo password_hash($pass,PASSWORD_DEFAULT); 
// echo rand(1000, 9999);
$code = str_shuffle($name);
echo substr($code,5,5);