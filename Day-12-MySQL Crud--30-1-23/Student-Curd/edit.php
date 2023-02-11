<?php
	include_once "autoload.php";

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

	$id = $_GET['edit_id'];

	// Form Validation
	if(empty($name) || empty($email) || empty($cell) || empty($username)){
		$msg = validate('All Fields are required');
	}else if(filter_var($email, FILTER_VALIDATE_EMAIL) == false){
		$msg =validate('Invalid Email Address'); 
	}else {
		
		connect()->query("UPDATE students SET name='$name', email='$email', cell='$cell', username='$username', location='$location', age='$age', gender='$gender', dept='$dept' WHERE id='$id' ");

	}
}

	/**
	 * find Edit student data
	 */
	if (isset($_GET['edit_id'])) {
		$id = $_GET['edit_id'];

		$edit_data = find('students', $id);
	}
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
					<h2>Student Data Edit</h2>
						<?php 
							if(isset($msg)){
								echo $msg;
							}
						?>
					<hr>
        <form action="" method="POST" enctype="multipart/form-data">
						<div class="row justify-content-center">
							<div class="col-sm-6">
								<div class="from-group mb-3">
									<label for="">Student Name</label>
									<input name="name" class="form-control" value="<?php echo $edit_data->name; ?>" type="text">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="from-group mb-3">
									<label for="">Email</label>
									<input name="email" class="form-control" value="<?php echo $edit_data->email; ?>" type="email">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="from-group mb-3">
									<label for="">Cell</label>
									<input name="cell" class="form-control" value="<?php echo $edit_data->cell; ?>" type="number">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="from-group mb-3">
									<label for="">Username</label>
									<input name="username" class="form-control" value="<?php echo $edit_data->username; ?>" type="text">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="from-group mb-3">
									<label for="">Location</label>
									<select class="from-control" name="location" id="">
										<option <?php echo ($edit_data-> location == 'Mirpur') ? 'selected' : ''; ?> value="Mirpur">Mirpur</option>
										<option <?php echo ($edit_data-> location == 'Banani') ? 'selected' : ''; ?> value="Banani">Banani</option>
										<option <?php echo ($edit_data-> location == 'Uttara') ? 'selected' : ''; ?>  value="Uttara">Uttara</option>
										<option <?php echo ($edit_data-> location == 'Badda') ? 'selected' : ''; ?> value="Badda">Badda</option>
										<option <?php echo ($edit_data-> location == 'Gulshan') ? 'selected' : ''; ?> value="Gulshan">Gulshan</option>
									</select>
								</div>
							</div>
							
							<div class="col-sm-6">
								<div class="from-group mb-3">
									<label for="">Age</label>
									<input name="age" class="form-control" value="<?php echo $edit_data->age; ?>" type="text">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="from-group mb-3">
									<label for="">Gender</label>
									<div class="from-group radio-style">
										<!-- <input name="gender" type="radio" <?php if($edit_data->gender == "Male") echo 'checked'; ?> value="Male" id="Male"> <label class="radio-input" for="Male">Male</label> -->
										<input name="gender" type="radio" <?php echo ($edit_data->gender == "Male") ? 'checked': ''  ?> value="Male" id="Male"> <label class="radio-input" for="Male">Male</label>
										<input name="gender" type="radio" <?php echo ($edit_data->gender == "Female") ? 'checked': ''  ?>  value="Female" id="Female"> <label class="radio-input" for="Female">Female</label>
									</div>
								</div>
							</div>
							
							<div class="col-sm-6">
								<div class="from-group mb-3">
									<label for="">Dept</label>
									<select class="from-control" name="dept" id="">
										<option <?php echo ($edit_data->dept == 'BBA') ? 'selected' : '';  ?> value="BBA">BBA</option>
										<option <?php echo ($edit_data->dept == 'EEE') ? 'selected' : '';  ?>  value="EEE">EEE</option>
										<option  <?php echo ($edit_data->dept == 'CSE') ? 'selected' : '';  ?>  value="CSE">CSE</option>
										<option  <?php echo ($edit_data->dept == 'English') ? 'selected' : '';  ?>  value="English">English</option>
										<option value="Bangla">Bangla</option>
									</select>
								</div>
							</div>
							
							<div class="col-sm--6">
								<div class="from-group mb-3">
									<label for="">Profile Photo</label>
									<img  width="150"  id="load_student_photo" style="max-width: 100%;" src="" alt="">
									<label for="student_photo" style="cursor: pointer;">
										<img width="250" src="images/<?php echo $edit_data->photo; ?>" alt="">
									</label>
									<input id="student_photo" name="profile_photo" style="display: none;" class="form-control" type="file">
								</div>
							</div>
							
	
							<div class="col-sm-12">
								<div class="from-group mb-3">
									<input name="stc" class="btn btn-primary" type="submit" value="Updated Student">
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