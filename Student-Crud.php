<?php 

// Note project
// 1. Template setup
// 2. Connection function


/**
* Student Crudv part 01 & 2 ( Template setup & Connect function)
*/

// Folder: app-> db.php * functions.php 
// db.php:- 

    /**
    * Make a Database connection
    */

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'stc';

    function connect() {
        global $host, $user, $pass, $db; // global variable
        return $connection = new mysqli($host, $user, $pass, $db);
    }

    /**
     * Student Crud part 03 ( Students Table  )
     */

     // Create student database table.- name
        -email -cell -username -location -age -Gender -Photo -dept 

    /**
     * Student Crudv part 04 ( data insert )
    */

    if(isset($_POST['stc'])) {
        //get value
        $name = $_POST['name'];
        $email = $_POST['email'];
        $cell = $_POST['cell'];
        $username = $_POST['username'];
        $location = $_POST['location'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];

        $dept = $_POST['dept'];

        // Form Validation
        if(empty($name) || empty($email) || empty($cell) || empty($username)){
            $msg = "<p class=\"alert alert-danger\"> All Fields are required! <button class=\"close\" data-dismiss=\"alert\"> &times;</button> </p>";
        }else if(filter_var($email, FILTER_VALIDATE_EMAIL) == false){
            $msg = "<p class=\"alert alert-danger\"> Invalid Email Address! <button class=\"close\" data-dismiss=\"alert\"> &times;</button> </p>";
        }else {
            connect()->query("INSERT INTO students (name, email, cell, username, location, age, gender, dept) VALUES ('$name', '$email', '$cell', '$username', '$location','$age', '$gender','$dept')");
        }
    }

    /**
     * Student Crud part 05 ( data insert with photo )
    */
        // File manage
        $file_name = $_FILES['profile_photo']['name'];

        $file_name_tmp = $_FILES['profile_photo']['tmp_name'];

        $file_arr = explode('.', $file_name);
        $file_ext = end($file_arr);

        $unique_name = md5(time() . rand()) . '.' . $file_ext;

        // Data Insert
        connect()->query("INSERT INTO students (name, email, cell, username, location, age, gender, dept, photo) VALUES ('$name', '$email', '$cell', '$username', '$location','$age', '$gender','$dept', '$unique_name')");

        //Upload profile photo
        move_uploaded_file($file_name_tmp, 'images/' . $unique_name);
        $msg = "<p class=\"alert alert-success\"> Data Stable. <button class=\"close\" data-dismiss=\"alert\"> &times;</button> </p>";

    /**
     * Student Crudv part 06 ( validate )
    */
    
    function validate($msg, $type='danger') {
        return "<p class=\"alert alert-$type\"> $msg ! <button class=\"close\" data-dismiss=\"alert\"> &times;</button> </p>";
    }

    /**
     * Student Crudv part 07 ( all data show )
    */


    <?php
    $data = connect()->query("SELECT * FROM students ORDER BY id DESC");

    while($student = $data->fetch_object()) :

?>
<tr>
    <td>1</td>
    <td> <?php echo $student -> name; ?> </td>
    <td> <?php echo $student -> email; ?> </td>
    <td> <?php echo $student -> cell; ?> </td>
    <td><img src="images/<?php echo $student->photo; ?> " alt=""></td>
    <td>
        <a class="btn btn-sm btn-info" href="#">View</a>
        <a class="btn btn-sm btn-warning" href="#">Edit</a>
        <a class="btn btn-sm btn-danger" href="#">Delete</a>
    </td>
</tr>
<?php endwhile; ?>

<?php

/**
* Student Crudv part 08 ( all functions for all data  )
*/
    function all($table, $order='DESC') {
        return connect()->query("SELECT * FROM $table ORDER BY id $order");
    }