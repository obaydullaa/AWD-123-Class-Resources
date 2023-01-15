<?php
// MySQL part 15 (  INSERT 3  )
//==================================

// $connection = new mysqli('localhost', 'root','','mydb');

// $sql = "CREATE TABLE users (
//   id int AUTO_INCREMENT,
//   name varchar(100),
//   email varchar(100),
//   cell varchar(15),
//   username varchar(30),
//   PRIMARY KEY (id)
// )";

// $connection-> query($sql);

/**
 * MySQL part 16 (  DELETE data from table  )
 */

//  $connection = new mysqli('localhost', 'root','', 'mydb');

//  $sql = "DELETE FROM Users WHERE ID='14' ";

//  $connection->query($sql);

/**
 * MySQL part 17 (  DELETE  by prepare  )
 */
  // $connection = new mysqli('localhost', 'root','', 'mydb');

  // $sql = "DELETE FROM Users WHERE ID='17' ";

  // $statement = $connection->prepare($sql);
  // $statement->execute();

/**
 * MySQL part 18 (update)
 */
 include_once "auto-load.php";

  // $sql = "UPDATE Users SET name='Rifat' WHERE id='19' ";

  // $connection->query($sql);



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Form Design</title>

  	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/main.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
    
</head>
<body> 
  <?php
    if(isset($_POST['add'])){
       
      // Get form values
      $name = $_POST['name'];
      $email = $_POST['email'];
      $cell = $_POST['cell'];
      $uname = $_POST['uname'];

      if(empty($name) || empty($email)|| empty($cell) || empty($uname)){
        $msg = "<h6 class=\" alert alert-danger\">All Filed Are Required !</h6>";
      }else{
         $connection = new mysqli('localhost', 'root', '', 'mydb');

        $sql = "INSERT INTO users(name, email, cell, username) VALUES('$name','$email','$cell','$uname')";
        $connection-> query($sql);

        $msg = "<h6 class=\" alert alert-success\"> Data Send to Database !</h6>";

      }
    }


  ?>
    
    <div class="from-wrap">
      <a class="btn btn-sm btn-primary mb-3" href="index.html">All Users</a>
        <div class="card shadow">
            <div class="card-body">
                <h2>Add New User</h2>
                <?php
                  if(isset($msg)){
                   echo $msg;

                  }

                ?>
                <form action="" method="POST">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Name</label>
                      <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                     
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Cell</label>
                      <input name="cell" type="text" class="form-control" id="exampleInputPassword1">
                      
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Username</label>
                      <input name="uname" type="text" class="form-control" id="exampleInputPassword1">
                      
                    </div>
                    <button name="add" type="submit" class="btn btn-primary">Add</button>
                  </form>
            </div>
        </div>
    </div>
    
    ?>

    <script src="assets/js/jquery-3.6.3.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>