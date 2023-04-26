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

	<div class="menu mt-4">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<a id="all" class="btn btn-primary btn-sm" href="index.php">All Students</a>
					<a id="add_student" class="btn btn-primary btn-sm" href="create.php">Add New Student</a>
					<a id="profile" class="btn btn-primary btn-sm" href="profile.php">Profile</a>
				</div>
			</div>
		</div>
	</div>
	
	

	<div class="app">

	</div>



	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

	<script>
		$('#add_student').click(function() {

			$.ajax({
				url: 'create.php',
				success: function(data) {
					$('.app').html(data);
				}
			});
			
			return false;
		});
		
		$('#profile').click(function() {

			$.ajax({
				url: 'profile.php',
				success: function(data) {
					$('.app').html(data);
				}
			});
			
			return false;
		});

		$('#all').click(function() {
			$.ajax({
				url: 'all.php',
				success: function(data) {
					$('.app').html(data);
				}
			});
			
			return false;
		});

		$.ajax({
			url: 'all.php',
			success: function(data) {
				$('.app').html(data);
			}
		});

		$('student_form').submit(function() {
			alert();
		});

		$(document).on('submit','#student_form', function() {
			let name = $('#name').val();
			let email = $('#email').val();
			let cell = $('#cell').val();
			let username = $('#username').val();
4785874
			if(name == '' || email == '' || cell == '' || username == ''){
				swal("opps", "All Field Are Required","warning");
			} else {
				$.ajax({
				url: 'ajax_template/ajax.php',
				method: "POST",
				data: {
					name : name,
					email: email,
					cell: cell,
					username: username
				},
				success: function(data) {
				swal("Success", "All Field Are Required","success");

					// data reset
					$('#name').val('');
					$('#email').val('');
					$('#cell').val('');
					$('#username').val('');
				}
			})
			}

			

			return false; 
		});
		$.ajax({
			url: 'ajax_template/all-student.php',
			success: function(data) {
				alert(data);
			}
		})

	
	</script>
</body>
</html>