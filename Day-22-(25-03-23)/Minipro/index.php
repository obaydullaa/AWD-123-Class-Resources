<?php
	include_once "vendor/autoload.php";
	use App\Controllers\Student;
	$stu = new Student;

	if(isset($_GET['delete_id'])){
		$id = $_GET['delete_id'];
		$stu -> deleteStudent($id);
		header("location:index.php");
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
	
	

	<div class="wrap-table">
		<a class="btn btn-primary" href="add-student.php">Add new Student</a>
		<br>
		<br>
		<div class="card shadow">
			<div class="card-body">
				<h2>All Data</h2>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Email</th>
							<th>Cell</th>
							<th>Photo</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$id = 1;
							$data = $stu -> allStudent();
							while($student = $data-> fetch_object()) :
							
						?>
						<tr>
							<td><?php echo $id++; ?></td>
							<td><?php echo $student -> name; ?></td>
							<td><?php echo $student -> email; ?></td>
							<td><?php echo $student -> cell; ?></td>
							<td><img src="photos/students/<?php echo $student -> photo; ?>" alt=""></td>
							<td>
								<a class="btn btn-sm btn-info" href="show.php?student_id=<?php echo $student -> id; ?>">View</a>
								<a class="btn btn-sm btn-warning" href="edit.php?edit_id=<?php echo $student -> id; ?>">Edit</a>
								<a class="btn btn-sm btn-danger" href="?delete_id=<?php echo $student -> id; ?>">Delete</a>
							</td>
						</tr>	
						<?php endwhile; ?>		

					</tbody>
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