<?php
	include_once "autoload.php";

	/**
	 * Show Single student
	 */
    if (isset($_GET['show_id'])) {
      $id = $_GET['show_id'];

      $student = find('students', $id); 

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $student->name; ?></title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
  

	 <div class="container bg-white py-5">
    <div class="row">
      <div class="col-lg-7 mx-auto">
        <a class="btn btn-primary btn-sm" href="index.php">Back</a>
        <div class="card mt-5">
          <img class="simg shadow mb-2" src="images/<?php echo $student->photo; ?>" width="200" alt="">
          <h2 class="text-center mb-0"><?php echo $student->name; ?></h2>
          <p class="text-center"><?php echo $student->username; ?></p>
        </div>
        <div class="card-body">
          <table class="table">
            <tr>
              <td>Name</td>
              <td><?php echo $student->name; ?></td>
            </tr>
            <tr>
              <td>Email</td>
              <td><?php echo $student->email; ?></td>
            </tr>
            <tr>
              <td>Obaydul</td>
              <td>obaydul@gmail.com</td>
            </tr>
            <tr>
              <td>Cell</td>
              <td><?php echo $student->cell; ?></td>
            </tr>
            <tr>
              <td>Gender</td>
              <td><?php echo $student->gender; ?></td>
            </tr>
            <tr>
              <td>Dep</td>
              <td><?php echo $student->dept; ?></td>
            </tr>
            <tr>
              <td>Location</td>
              <td><?php echo $student->location; ?></td>
            </tr>
          </table>
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