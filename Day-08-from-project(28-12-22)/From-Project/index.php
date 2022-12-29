
<!-- 
  PHP part:  67 ( Data send by a form  ) // From design
  PHP part:  68 ( form setup )
  PHP part:  69 ( form Validation )
  PHP part:  70 ( form Validation Required)

  ** filter_var($email, FILTER_VALIDATE_EMAIL) = for email validation.
-->

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
  /**
   * Student Data Form
   */

   if(isset($_POST['add'])){

    // From variable get
    $name = $_POST['name'];
    $email = $_POST['email'];
    $cell = $_POST['cell'];
    $uname = $_POST['uname'];

    if(empty($name)){
      $err['name'] = "<p class=\"text-danger\">* Required</p>";
    }

    if(empty($email)){
      $err['email'] = "<p class=\"text-danger\">* Required</p>";
    }

    if(empty($cell)){
      $err['cell'] = "<p class=\"text-danger\">* Required</p>";
    }

    if(empty($uname)){
      $err['uname'] = "<p class=\"text-danger\">* Required</p>";
    }

    if(empty($name) || empty($email) || empty($cell) || empty($uname)){
      $msg =  '<p class="alert alert-danger">All fields are Required ! <button class="close" data-dismiss="alert">&times;</button></p>';
    }else if (filter_var($email, FILTER_VALIDATE_EMAIL) == false){
      $msg =  '<p class="alert alert-danger">Invalid Email! <button class="close" data-dismiss="alert">&times;</button></p>';

    }else {
      $msg =  '<p class="alert alert-success">data stable. <button class="close" data-dismiss="alert">&times;</button></p>';
    }
   }
  ?>
    
    <div class="from-wrap">
        <div class="card">
            <div class="card-body">
                <h2>Add New Student</h2>
                <?php 
                    if(isset($msg)){
                      echo $msg;
                    }

                ?>
                <form action="" method="POST">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Name</label>
                      <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      <?php 
                          if(isset($err['name'])){
                            echo $err['name'];
                          }
                      ?>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                      <?php 
                          if(isset($err['email'])){
                            echo $err['email'];
                          }
                      ?>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Cell</label>
                      <input name="cell" type="text" class="form-control" id="exampleInputPassword1">
                      <?php 
                          if(isset($err['cell'])){
                            echo $err['cell'];
                          }
                      ?>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Username</label>
                      <input name="uname" type="text" class="form-control" id="exampleInputPassword1">
                      <?php 
                          if(isset($err['uname'])){
                            echo $err['uname'];
                          }
                      ?>
                    </div>
                    <button name="add" type="submit" class="btn btn-primary">Add</button>
                  </form>
            </div>
        </div>
    </div>

    <script src="assets/js/jquery-3.6.3.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>

