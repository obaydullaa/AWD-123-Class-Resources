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

/**
 * Student Crudv part 09 ( create  ) 
 */

function create($sql) {
    connect()->query($sql);
    }
// Data Insert
    create("INSERT INTO students (name, email, cell, username, location, age, gender, dept, photo) VALUES ('$name', '$email', '$cell', '$username', '$location','$age', '$gender','$dept', '$unique_name')");

/**
 * Student Crudv part 10 ( file upload function 1 & 2)
 */

 function move($file, $location='/', array $type = ['jpg', 'png', 'gif', 'jpeg']) {

    // File management
    
    $file_name = $file['name'];
    $file_name_tmp = $file['tmp_name'];
    $file_arr = explode('.', $file_name);
    $file_ext = end($file_arr);
    $unique_name = md5(time() . rand()) . '.' . $file_ext;
 
    $msg = '';
    if(in_array($file_ext, $type) == false) {
       $msg = validate('Invalid file format');
    } else {
       // Upload File
       move_uploaded_file($file_name_tmp, $location . $unique_name);
    }
 
    return [
       'unique_name' => $unique_name,
       'err_msg'     => $msg
    ];
    
   }

   /**
    * Student Crudv part 12 ( file upload function 3 )
    */

/**
 * Data create by create
 */
if(isset($_GET['delete_id'])){
    $delete_id = $_GET['delete_id'];
    delete('students', $delete_id);
}

function delete($table, $id) {
    connect()->query("DELETE FROM $table WHERE id='$id' ");
 }

 <a class="btn btn-sm btn-danger" href="?delete_id=<?php echo $student -> id; ?>">Delete</a>

 /**
 * Student Crudv part 13 ( delete )
 */
<?php
	include_once "autoload.php";

	/**
	 * Student Data Delete
	 */
	if(isset($_GET['delete_id'])){
		$delete_id = $_GET['delete_id'];
		$photo_name = $_GET['photo'];

		unlink('images/' . $photo_name);
		delete('students', $delete_id);
		header("location:index.php");
	}
	
?>
 <a class="btn btn-sm btn-danger" href="?delete_id=<?php echo $student -> id; ?>&photo=<?php echo $student -> photo; ?>">Delete</a>


 /**
  * Student Crudv part 14 ( delete confirmation )
  */
    // Alert Delete Message
        $('#delete_btn').click(function() {
        let confirmation = confirm("Are You Sure ?");

        if (confirmation == true) {
            return true;
        } else {
            return false;
        }

    });

    /**
     * Student Crudv part 15 ( show page design with id )
     */

     // Design Details Single student page design.


     /**
      * Student Crudv part 16 ( show single student )
      */
      	/**
	 * Show Single student
	 */
    <a class="btn btn-sm btn-info" href="show.php?show_id=<?php echo $student -> id; ?>">View</a>

    if (isset($_GET['show_id'])) {
        $id = $_GET['show_id'];
  
        $data = connect()->query("SELECT * FROM students WHERE id='$id'");
        $student =  $data->fetch_object();   
      }
      <td><?php echo $student->name; ?></td>

      /**
       * Student Crudv part 17 ( edit page design  )
       */
      // student edit page design 

    /**
     * Student Crudv part 18 ( find )
     */


	include_once "autoload.php";
	/**
	 * find Edit student data
	 */

    function find($table, $id) {
        $data = connect()->query("SELECT * FROM $table WHERE id='$id'");
         return $data->fetch_object();
     }
     

	if (isset($_GET['edit_id'])) {
		$id = $_GET['edit_id'];

		$edit_data = find('students', $id);
	}

    <input name="name" class="form-control" value="<?php echo $edit_data->name; ?>" type="text">


    /**
     * Student Crudv part 19 ( gender dynamic by using ternary  )
     */

    //  use if else 

     <?php if($edit_data->gender == "Male") echo 'checked'; ?> 

    //  Use ternary Operator 
    <?php echo ($edit_data->gender == "Male") ? 'checked': ''  ?>

    /**
     * Student Crudv part 20 ( dept dynamic  )
    */
    <input name="name" class="form-control" value="<?php echo $edit_data->name; ?>" type="text">


    /**
     * Student Crudv part 21 ( location dynamic  ).wmv
     */
 
     <option <?php echo ($edit_data-> location == 'Mirpur') ? 'selected' : ''; ?> value="Mirpur">Mirpur</option>

     /**
      * Student Crudv part 22 ( photo update )
      */
    //   1. Copy from index.php 

    <?php
	include_once "autoload.php";

	/**
 * Isseting student add form
 * ======================================
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

	$id = $_GET['edit_id'];

	// Form Validation
	if(empty($name) || empty($email) || empty($cell) || empty($username)){
		$msg = validate('All Fields are required');
	}else if(filter_var($email, FILTER_VALIDATE_EMAIL) == false){
		$msg =validate('Invalid Email Address'); 
	}else {

        if(!empty($_FILES['new_photo']['name'])) {
			$data = move($_FILES['new_photo'], 'images/');
			$photo_name = $data['unique_name'];
			unlink('images/' . $_POST['old_photo']);
		}else {
			$photo_name = $_POST['old_photo'];
		}
		
    connect()->query("UPDATE students SET name='$name', email='$email', cell='$cell', username='$username', location='$location', age='$age', gender='$gender', dept='$dept', photo='$photo_name' WHERE id='$id' ");

	}
}

	/**
	 * find Edit student data
	 */
	if (isset($_GET['edit_id'])) {
		$id = $_GET['edit_id'];

		$edit_data = find('students', $id);
	}
?>

//markup
<div class="col-sm--6">
    <div class="from-group mb-3">
        <label for="">Profile Photo</label>
        <img  width="150"  id="load_student_photo_edit" style="max-width: 100%;" src="images/<?php echo $edit_data->photo;  ?>" alt="">
        <label for="student_photo_edit" style="cursor: pointer;">
            <img width="50" src="assets/media/img/image-icon.png" alt="">
        </label>
        <input id="student_photo_edit" name="new_photo" style="display: none;" class="form-control" type="file">
        <input type="hidden" value="<?php echo $edit_data->photo; ?>" name="old_photo">
    </div>
</div>