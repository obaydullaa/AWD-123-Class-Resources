<?php 

$id = $_POST['id'];

$connection = new mysqli('localhost', 'root', '', 'ajax');
$data = $connection->query("SELECT * FROM students WHERE id='$id'");

$profile_data = $data->fetch_object();

?>

<div class="wrap-table shadow">
	<div class="card">
		<div class="card-body text-center">
			<h2>User Profile : <?php echo $profile_data->name; ?></h2>
			<img style="width: 200px; height: 200px; border-radius: 50%; margin: 50px auto;" src="photos/<?php echo $profile_data->photo; ?>" alt="">
			<h2><?php echo $profile_data->name; ?></h2>
			<h2><?php echo $profile_data->cell; ?></h2>

			<table class="table mt-3">
				<tr>
					<td>Name</td>
					<td><?php echo $profile_data->name; ?></td>
				</tr>
				<tr>
					<td>Eamil</td>
					<td><?php echo $profile_data->email; ?></td>
				</tr>
				<tr>
					<td>User Name</td>
					<td><?php echo $profile_data->username; ?></td>
				</tr>
				<tr>
					<td>Cell</td>
					<td><?php echo $profile_data->cell; ?></td>
				</tr>
			</table>
			<a id="back" class="btn btn-primary" href="javascript: voi(0)">Back</a>
		</div>
	</div>
</div>
	
