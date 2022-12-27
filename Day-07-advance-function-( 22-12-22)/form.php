<?php

/**
PHP part: 61 ( form setup )
 * Step 01: input element Must wrap from tag.
 * Step 02: PHP Receive Data by method -> GET, POST, REQUEST(default).
 * Step 03: Input tag name.
 * Step 04: If Upload any file use -> enctype="multipart/form-data"
 * Step 05: action will be where receive data. 

 * PHP part: 62( value get, post, request)
 ===========================================================
* GET => receive GET
* POST => receive POST
* REQUEST => if use GET, POST or empty when receive by REQUEST. It's super global variable.
* 
*
 * PHP part:63 Why Use ( value GET, POST, REQUEST)
 ===========================================================
* GET Method  => It's data show in url and it's have security issue.(URL data manage use GET)
* POST Method => It's have security. (most use) (From submit us POST)
* REQUEST     => It's data show in url and it's have security issue. (if need use in OOP)
*
*
*
 * PHP part:64 (isset a from)
 ===========================================================

 if(isset($_POST['submit'])){
    echo '<pre>';
        print_r($_POST);
    echo '</pre>';
}
*
*
 * PHP part:65 (value, get )
 ===========================================================
// get all value receive in variable.
$name = $_POST['name'];
$name = $_POST['email'];
$name = $_POST['uname'];
$name = $_POST['submit'];

*
*
 * PHP part:66 (form validation )
 ===========================================================
*
*





*/ 





if(isset($_POST['submit'])){
    //get all values
    $name = $_POST['name'];
    $email = $_POST['email'];
    $uname = $_POST['uname'];
    $submit = $_POST['submit'];

    if(empty($name) ||empty($email) || empty($uname) ) {
        echo "<span style='color: red;'>All fields are required</span>";
    } else{
        echo "<span style='color: green;'>Data is Okay</span>";
    }
}

?>
<form action="" method="POST" enctype="multipart/form-data">
    <input name="name" type="text" placeholder="Name">
    <input name="email" type="text" placeholder="Email">
    <input name="uname" type="text" placeholder="User Name">
    <input name="submit" type="submit" value="Add">
</form>