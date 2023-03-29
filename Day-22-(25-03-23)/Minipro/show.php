<?php

	include_once "vendor/autoload.php";
	use App\Controllers\Student;
	$stu = new student;

	if(isset($_GET['student_id']))
		$id = $_GET['student_id'];

		$single_student = $stu -> showSingleStudent($id);
	?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $single_student->name;  ?></title>
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
			<div class="card-body text-center">
				<h2><?php echo $single_student->name;  ?></h2>
				<img width="200px" src="photos/students/4fd93e59aa20309066144c10cf8afe41.jpg" alt="">
				<table class="table tabla-striped mt-3">
					<tr>
						<td>Name</td>
						<td><?php echo $single_student->name;  ?></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><?php echo $single_student->email;  ?></td>
					</tr>
					<tr>
						<td>Cell</td>
						<td><?php echo $single_student->cell;  ?></td>
					</tr>
				</table>
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