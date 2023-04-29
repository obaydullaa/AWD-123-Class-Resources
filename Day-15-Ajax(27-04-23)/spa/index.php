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
		
		$(document).on('click','#profile', function(e){
			e.preventDefault();

			let id = $(this).attr('profile_id'); 

			$.ajax({
				url: 'profile.php',
				method: 'POST',
				data: {
					id: id,
				},
				success: function(data) {
					$('.app').html(data);
				}
			});

		})
		$(document).on('click','#back', function(e){
			e.preventDefault();
			$.ajax({
				url: 'all.php',
				success: function(data) {
					$('.app').html(data);
					allData();
				}
			});

		})

		$('#all').click(function() {
			$.ajax({
				url: 'all.php',
				success: function(data) {
					$('.app').html(data);
					allData()
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

			$.ajax({
				url: 'ajax_template/ajax.php',
				method: 'POST',
				data: new FormData(this),
				contentType: false,
				processData: false,
				success: function(data) {
					swal("Safe", "Student Added Successful","success");

					$('#student_form')[0].reset();
				}
			});
			

			return false; 
		});

		allData()
		function allData() {
			$.ajax({
				url: 'ajax_template/all-student.php',
				success: function(data) {
					$('#all_student_data').html(data);
				}
			})
		}


		$(document).on('click', 'a.delete-btn', function() {
			let id = $(this).attr('delete_id');
			swal({
				title: "Are you sure?",
				text: "Delete Student Data",
				icon: "warning",
				buttons: true,
				dangerMode: true,
				}).then((confirm) => {
				if (confirm) {
					$.ajax({
						url: 'ajax_template/delete.php',
						method: "POST",
						data: {
							id: id,
						},
						success: function(data) {
							swal("Success", "Student data delete..","success");
							allData()
						}
					});
				} else {
					swal("Safe", "Student data  safe now..","success");
				}
				});

			return false;
		}); 

	
	</script>
</body>
</html>