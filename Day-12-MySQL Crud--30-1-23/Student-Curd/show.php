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

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Student Database System</title>
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
          <img class="simg shadow mb-2" src="images/d645e9f86c2b7e05977c12dd309dbd21.jpg" width="200" alt="">
          <h2 class="text-center mb-0">Md. Obaydulla</h2>
          <p class="text-center">UserName</p>
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