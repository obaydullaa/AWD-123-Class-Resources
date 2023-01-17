<?php
	include_once "auto-load.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/main.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
	
	
<section class="table-wrap">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-10">
				<div class="wrap-table mt-5">
					<a class="btn btn-primary mb-3" href="create.php">Add New User</a>
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
										$sql = "SELECT * FROM users WHERE email='moriomnela@gmail.com' AND Location='Mirpur' ";
										$data = $connection->query($sql);
										$i = 1;
										while ($users_data =  $data->fetch_object()):
									?>
									<tr>
										<td><?php echo $i++; ?></td>
										<td><?php echo $users_data->name ?></td>
										<td><?php echo $users_data->email ?></td>
										<td><?php echo $users_data->cell ?></td>
										<td><?php echo $users_data->username ?></td>
										<td><img src="assets/img/user-image.jpg" alt=""></td>
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
			</div>
		</div>
	</div>
</section>
	







	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>