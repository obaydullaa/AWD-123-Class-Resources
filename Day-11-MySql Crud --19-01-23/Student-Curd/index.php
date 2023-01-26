<?php
	include_once "autoload.php";
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

	<?php

		/**
		 * Isseting student add form
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
				$msg = validate('All Fields are required');
			}else if(filter_var($email, FILTER_VALIDATE_EMAIL) == false){
				$msg =validate('Invalid Email Address'); 
			}else {

				
				//Upload profile photo
				$unique_name = move($_FILES['profile_photo'],'photo/');
				
				// Data Insert
				create("INSERT INTO students (name, email, cell, username, location, age, gender, dept, photo) VALUES ('$name', '$email', '$cell', '$username', '$location','$age', '$gender','$dept', '$unique_name')");
				
				$msg =validate('Data Stable', 'success'); 

			}
		}
	?>	

	<div class="wrap-table">
		<a class="btn btn-sm btn-primary mb-3" data-toggle="modal"  href="#add_student_modal">Add New Student</a>
		<?php
		 	if(isset($msg)){
				echo $msg;
			}
		 ?>
		<div class="card shadow">
			<div class="card-body">
				<h2>All Students</h2>
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
							$data = all('students');
							$i = 1;
							while($student = $data->fetch_object()) :

						?>
						<tr>
							<td><?php echo $i++; ?></td>
							<td> <?php echo $student -> name; ?> </td>
							<td> <?php echo $student -> email; ?> </td>
							<td> <?php echo $student -> cell; ?> </td>
							<td><img src="photo/<?php echo $student->photo; ?> " alt=""></td>
							<td>
								<a class="btn btn-sm btn-info" href="#">View</a>
								<a class="btn btn-sm btn-warning" href="#">Edit</a>
								<a class="btn btn-sm btn-danger" href="#">Delete</a>
							</td>
						</tr>
						<?php endwhile; ?>
											
					</tbody>
				</table>
			</div>
		</div>
	</div>
	
	<!-- student create modal  -->
	<div class="modal fade" id="add_student_modal">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h3>Add New Student</h3>
				</div>
				<div class="modal-body">
					<form action="" method="POST" enctype="multipart/form-data">
						<div class="row justify-content-center">
							<div class="col-sm-6">
								<div class="from-group mb-3">
									<label for="">Student Name</label>
									<input name="name" class="form-control" type="text">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="from-group mb-3">
									<label for="">Email</label>
									<input name="email" class="form-control" type="email">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="from-group mb-3">
									<label for="">Cell</label>
									<input name="cell" class="form-control" type="number">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="from-group mb-3">
									<label for="">Username</label>
									<input name="username" class="form-control" type="text">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="from-group mb-3">
									<label for="">Location</label>
									<select class="from-control" name="location" id="">
										<option value="Mirpur">Mirpur</option>
										<option value="Banani">Banani</option>
										<option value="Uttara">Uttara</option>
										<option value="Badda">Badda</option>
										<option value="Gulshan">Gulshan</option>
									</select>
								</div>
							</div>
							
							<div class="col-sm-6">
								<div class="from-group mb-3">
									<label for="">Age</label>
									<input name="age" class="form-control" type="text">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="from-group mb-3">
									<label for="">Gender</label>
									<div class="from-group radio-style">
										<input name="gender" type="radio" checked value="Male" id="Male"> <label class="radio-input" for="Male">Male</label>
										<input name="gender" type="radio" value="Female" id="Female"> <label class="radio-input" for="Female">Female</label>
									</div>
								</div>
							</div>
							
							<div class="col-sm-6">
								<div class="from-group mb-3">
									<label for="">Dept</label>
									<select class="from-control" name="dept" id="">
										<option value="Mirpur">BBA</option>
										<option value="EEE">EEE</option>
										<option value="CSE">CSE</option>
										<option value="English">English</option>
										<option value="Bangla">Bangla</option>
									</select>
								</div>
							</div>
							
							<div class="col-sm--6">
								<div class="from-group mb-3">
									<label for="">Profile Photo</label>
									<img  width="150"  id="load_student_photo" style="max-width: 100%;" src="" alt="">
									<label for="student_photo" style="cursor: pointer;">
										<img width="50" src="assets/media/img/image-icon.png" alt="">
									</label>
									<input id="student_photo" name="profile_photo" style="display: none;" class="form-control" type="file">
								</div>
							</div>
							
	
							<div class="col-sm-12">
								<div class="from-group mb-3">
									<input name="stc" class="btn btn-primary" type="submit" value="Add Student">
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer"></div>
			</div>
		</div>
	</div>




	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
	<script>
		$('#student_photo').change(function(e) {
			let file_url = URL.createObjectURL(e.target.files[0]);
			$('#load_student_photo').attr('src', file_url);

		});
	</script>
</body>
</html>