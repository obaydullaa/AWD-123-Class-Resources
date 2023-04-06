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

<?php
	// if(isset($_POST['insert'])) {
	// 	// Form value
	// 	$name = $_POST['name'];
	// 	$email = $_POST['email'];
	// 	$cell = $_POST['cell'];
	// 	$roll = $_POST['roll'];

	// 	if(isset($email)){
	// 		$email_arr = explode('@', $email);
	// 		$inst_mail = end($email_arr);
	// 	}
		
	// 	if(isset($cell)){
	// 		$cell_start = substr($cell, 0, 3);
	// 	}



	// 	if(empty($name)){
	// 		$err['name'] = "<p style='color: red;'>*Required <p>";
	// 	}
	// 	if(empty($email)){
	// 		$err['email'] = "<p style='color: red;'>*Required <p>";
	// 	}
	// 	if(empty($cell)){
	// 		$err['cell'] = "<p style='color: red;'>*Required <p>";
	// 	}
	// 	if(empty($roll)){
	// 		$err['roll'] = "<p style='color: red;'>*Required <p>";
	// 	}

	// 	// Form validation
	// 	if(empty($name) || empty($email) || empty($cell) || empty($roll) ){
	// 		// $msg = "All Fields Are Required.";
	// 		$msg = "<p class=\"alert alert-danger\" >All filed are required..! <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";

	// 	}else if(filter_var($email, FILTER_VALIDATE_EMAIL)== false){
			
	// 		$msg = "<p class=\"alert alert-warning\" >Invalid Email Address..! <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
	// 	}else if($inst_mail !== 'gmail.com'){
	// 		$msg = "<p class=\"alert alert-warning\" >Please Valid mail..! <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";

	// 	}else if(in_array($cell_start, ['013', '014', '015', '016', '017', '018', '019']) == false) {
	// 		$msg = "<p class=\"alert alert-warning\" >Please Valid Phone Number..! <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
	// 	}
		
	// 	else {
	// 		$msg =  "<p class=\"alert alert-success\">Data is stable. <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
	// 	}

	// }
?>
	
	

	<div class="wrap shadow">
		<div class="card">
			<div class="card-body">
				<h2>File Upload</h2>
				<form action="" method="POST">
					<div class="form-group">
						<label for="file-upload"><img width="50" data-placement="right" data-toggle="to0ltip" title="Profile Photo" src="images.png" style="cursor: pointer;" alt=""></label>
						<input style="display: none;" type="file"  id="file-upload" class="form-control">
					</div>

					<div class="form-group">
						<input name="insert" class="btn btn-primary" type="submit" value="Submit">
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
	<script>
		$(function () {
			$('[data-toggle="tooltip"]').tooltip()
		})
	</script>
</body>
</html>