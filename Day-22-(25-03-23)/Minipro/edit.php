<?php

	include_once "vendor/autoload.php";
	use App\Controllers\Student;
	$stu = new student;

	// get edit id 
	if(isset($_GET['edit_id']) ){
		$id = $_GET['edit_id'];
		$edit_data = $stu -> editInfo($id);
	}else {
		header('location:index.php'); 
	}

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
	<title>Edit <?php echo $edit_data->name; ?></title>
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
				<h2><?php echo $edit_data->name; ?></h2>
				<?php
					if(isset($msg) ){
						echo $msg;
					}
				?>
				<form action="" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label for="">Name</label>
						<input name="name" class="form-control" value="<?php echo $edit_data->name; ?>" type="text">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input name="email" class="form-control" value="<?php echo $edit_data->email; ?>" type="text">
					</div>
					<div class="form-group">
						<label for="">Cell</label>
						<input name="cell" class="form-control" value="<?php echo $edit_data->cell; ?>" type="text">
					</div>
					<div class="form-group">
						<img width="200" src="photos/students/<?php echo $edit_data->photo;  ?>" alt="">
						<label for="">Photo</label>
						<input name="photo" class="" type="file">
					</div>
					<div class="form-group">
						<input name="add" class="btn btn-primary" type="submit" value="Update Now">
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