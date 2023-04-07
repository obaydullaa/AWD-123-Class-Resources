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
/**
 * Upload
 */
	if(isset($_POST['upload'])) {
		$file = $_FILES['profile_photo'];

		// file info
		$file_name = $file['name'];  
		$file_tpmname = $file['tmp_name'];  
		$file_size = $file['size'];

		move_uploaded_file($file_tpmname,'photos/'.$file_name );
		
		
	}
	
	
?>
	
	

	<div class="wrap shadow">
		<div class="card">
			<div class="card-body">
				<h2>File Upload</h2>

				<form action="" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label for="file-upload"><img width="50" data-placement="right" data-toggle="to0ltip" title="Profile Photo" src="images.png" style="cursor: pointer;" alt=""></label>
						<input name="profile_photo" style="display: none;" type="file"  id="file-upload" class="form-control">
					</div>

					<div class="form-group">
						<input name="upload" class="btn btn-primary" type="submit" value="Upload Now">
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