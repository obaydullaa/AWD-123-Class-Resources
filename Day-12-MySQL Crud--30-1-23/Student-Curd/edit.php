<?php
	include_once "autoload.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
  

<div class="container mt-5">
  <div class="row">
    <div class="col-lg-6 mx-auto">
    <a class="btn btn-primary btn-sm mb-3" href="index.php">Back</a>
      <div class="card">
        <div class="card-body">
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