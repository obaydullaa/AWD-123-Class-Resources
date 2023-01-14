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
  $connection = new mysqli('localhost', 'root','', 'mydb');

  $sql = "UPDATE Users SET name='Rifat' WHERE id='19' ";

  $connection->query($sql);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Design</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
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
        <div class="card">
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
    /**
 * MySQL part 19 (Select)
 */
    <?php
    /**
     * Type of fetch
     * // Use for PDO
     *  fetch()
     * fetchAll();
     * 
     * fetch_array(); // data get index array and associative array. 
     * fetch_assoc(); // data get only associative array.
     * fetch_object() // data get associative array for catch different way.
     * 
     * 
     * 
     */
    
    $sql = "SELECT * FROM users";
    $data = $connection->query($sql);

    // if use fetch_assoc()
    // $user_data = $data->fetch_assoc(); 
    // echo $user_data['id'];

    // / if use fetch_object()
     
    while($user_data = $data->fetch_object()){
      echo"Name: ". $user_data->name." Email: ".$user_data->email." cell: ". $user_data->cell. "<hr>";
    }

    
    ?>
      <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <a class="btn btn-primary" data-bs-toggle="modal" href="#shop_modal">Add new product</a>
                <br>
                <br>
                <div class="card shadow">
                    <div class="card-body">
                        <h2>Shop App</h2>
                        <hr>
                        <table class="table table-striped shop-data">
                            <thead>
                                <tr>
                                    <td>#</td>
                                    <td>Product Photo</td>
                                    <td>Product Name</td>
                                    <td>Price</td>
                                    <td>Quantity</td>
                                    <td>Total</td>
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <tbody id="product_list">                              

                            <tr>
                              <td1</td>
                              <td>Images</td>
                              <td>Obaydul</td>
                              <td>$565</td>
                              <td>4</td>
                              <td>
                                <a href="https://cdn.ostad.app/user/avatar/638dc11391cbb43930e05dd1"></a>
                              </td>
                          </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/jquery-3.6.3.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>