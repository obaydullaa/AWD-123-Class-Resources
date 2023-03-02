<?php
	include "autoload.php";

	$user = new User;

	if(isset($_GET['delete_id']) ) {
		$id = $_GET['delete_id'];

		$user -> userDhonso($id);
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

<?php

	/**
	 * Isseting from
	 */

	// initialize variables with default values
		$name = '';
		$email = '';
		$cell = '';
		$username = '';

		if( isset($_POST['add']) ){
			// get value
			$name = $_POST['name'];
			$email = $_POST['email'];
			$cell = $_POST['cell'];
			$username = $_POST['username'];
		}

		$user -> userTomeJao($name, $email, $cell, $username);


?>
	
	

	<div class="wrap-table shadow">
		<a class="btn btn-sm btn-primary" data-toggle="modal" href="#user_add_modal">Add new student</a>
		<br>
		<br>
		<br>
		<div class="card">
			<div class="card-body shadow">
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

							$data = $user-> sobUserCholeAso();
							$i = 1;

							while($d = $data->fetch_object() ):

						?>

						<tr>
							<td><?php echo $i; $i++; ?></td>
							<td><?php echo $d->name; ?></td>
							<td><?php echo $d->email; ?></td>
							<td><?php echo $d->cell; ?></td>
							<td><img src="assets/media/img/pp_photo/istockphoto-615279718-612x612.jpg" alt=""></td>
							<td>
								<a class="btn btn-sm btn-info" href="#">View</a>
								<a class="btn btn-sm btn-warning" href="#">Edit</a>
								<a class="btn btn-sm btn-danger" href="?delete_id=<?php echo $d -> id; ?>">Delete</a>
							</td>
						</tr>
						<?php endwhile; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	


	<div class="modal fade" id="user_add_modal">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-body">
					<h2>Add new user</h2>
					<hr>
					<form action="" method="POST">
						<div class="form-group">
							<label for="">Name</label>
							<input class="form-control" type="text" name="name">
						</div>
						<div class="form-group">
							<label for="">Email</label>
							<input class="form-control" type="text" name="email">
						</div>
						<div class="form-group">
							<label for="">Cell</label>
							<input class="form-control" type="number" name="cell">
						</div>
						<div class="form-group">
							<label for="">Username</label>
							<input class="form-control" type="text" name="username">
						</div>
						<div class="form-group">
							<input type="submit" value="Add New User" class="btn btn-primary" name="add">
						</div>
					</form>
				</div>
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