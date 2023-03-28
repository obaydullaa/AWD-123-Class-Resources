<?php

	include_once "vendor/autoload.php";

	use App\Controllers\Student;

	$stu = new student;

	// Get Value
	if(isset($_POST['add'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$cell = $_POST['cell'];
		$pass = $_POST['pass'];
		$photo = $_FILES['photo'];
	}

	// Error check
	if(empty($name) || empty($email) || empty($cell) ){
		$msg = "<p class='alert alert-danger'>All file are requird !</p>";
	}else {
		$stu -> createNewStudent($name, $email, $cell,$pass,$photo);
	}

	?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
	
	

	<div class="wrap">
		<a class="btn btn-primary" href="index.php">Back</a>
		<br>
		<br>
		<div class="card shadow">
			<div class="card-body">
				<h2>Sign Up</h2>
				<?php
					if(isset($msg) ){
						echo $msg;
					}
				?>
				<form action="" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label for="">Name</label>
						<input name="name" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input name="email" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Cell</label>
						<input name="cell" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Password</label>
						<input name="pass" class="" type="password">
					</div>
					<div class="form-group">
						<label for="">Photo</label>
						<input name="photo" class="" type="file">
					</div>
					<div class="form-group">
						<input name="add" class="btn btn-primary" type="submit" value="Sign Up">
					</div>
				</form>
			</div>
		</div>
	</div>
	







	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>