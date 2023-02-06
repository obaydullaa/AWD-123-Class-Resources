<?php
	include_once "autoload.php";

	/**
	 * Student Data Delete
	 */
	if(isset($_GET['show_id'])) {
    $id = $_GET['show_id'];

    $data = connect()->query("SELECT * FROM students WHERE id='$id'");
    $student =  $data->fetch_object();

  }
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $student->name; ?></title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>

	 <div class="container bg-white py-5">
    <div class="row">
      <div class="col-lg-7 mx-auto">
        <div class="card mt-5">
          <img class="simg shadow mb-2" src="images/<?php echo $student->photo; ?>" width="200" alt="">
          <h2 class="text-center mb-0"><?php echo $student->name; ?></h2>
          <p class="text-center"><?php echo $student->username; ?></p>
        </div>
        <div class="card-body">
          <table class="table">
            <tr>
              <th>Name</th>
              <th>Email</th>
            </tr>
            <tr>
              <td>Obaydul</td>
              <td>obaydul@gmail.com</td>
            </tr>
            <tr>
              <td>Obaydul</td>
              <td>obaydul@gmail.com</td>
            </tr>
            <tr>
              <td>Obaydul</td>
              <td>obaydul@gmail.com</td>
            </tr>
            <tr>
              <td>Obaydul</td>
              <td>obaydul@gmail.com</td>
            </tr>
            <tr>
              <td>Obaydul</td>
              <td>obaydul@gmail.com</td>
            </tr>
          </table>
          <a class="btn btn-primary btn-sm" href="index.php">Back</a>
        </div>
      </div>
    </div>
   </div>



	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
	<script>

	</script>
</body>
</html>