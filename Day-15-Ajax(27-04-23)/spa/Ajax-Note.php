<?php



?>
<script>

    $('#add_student').click(function() { // select button of link

        $.ajax({
            url: 'create.php',
            success: function(data) {
                $('.app').html(data);
            }
        });
        return false;
    });

    // get value from input and store variable.

    $(document).on('submit','#student_form', function() {
        // Manual system
        let name = $('#name').val();
        let email = $('#email').val();
        let cell = $('#cell').val();
        let username = $('#username').val();
        
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
    
    // Get value and push in mysql server
    $name = $_POST['name'];
    $email = $_POST['email'];
    $cell = $_POST['cell'];
    $username= $_POST['username'];

    $connection = new mysqli('localhost', 'root', '', 'ajax');
    $connection->query("INSERT INTO students (name, email, cell, username) VALUES ('$name', '$email', '$cell', '$username')");
    

// Delete items
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

    // delete.php file
    //<php
        $id = $_POST['id'];

        $connection = new mysqli('localhost', 'root', '', 'ajax');
        $data = $connection->query("DELETE FROM students WHERE id = '$id'");

    // Ajax Part two---

    // Serialize system get data
        // form data get use -> name="name" 
    //ajax.php ->
        $name = $_POST['name'];
        $email = $_POST['email'];
        $cell = $_POST['cell'];
        $username= $_POST['username'];

        $connection = new mysqli('localhost', 'root', '', 'ajax');
        $connection->query("INSERT INTO students (name, email, cell, username) VALUES ('$name', '$email', '$cell', '$username')");



	$(document).on('submit','#student_form', function() {

        $.ajax({
            url: 'ajax_template/ajax.php',
            method: 'POST',
            data:  $(this).serialize(),
            success: function(data) {
                console.log(data);
            }
        });


        return false; 
     });

     // Use form dataObject

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

// ajax.php ->
// image upload use jQuery

    $name = $_POST['name'];
    $email = $_POST['email'];
    $cell = $_POST['cell'];
    $username= $_POST['username'];

    $file_name = time() . $_FILES['photo']['name'];
    $file_tmp_name = $_FILES['photo']['tmp_name'];

    $connection = new mysqli('localhost', 'root', '', 'ajax');
    $connection->query("INSERT INTO students (name, email, cell, username, photo) VALUES ('$name', '$email', '$cell', '$username', '$file_name')");

    move_uploaded_file($file_tmp_name, '../photos/' . $file_name);


// jason to array 
//=========================
// php thake data js ar kase dite hole json a conver kore dite hobe.
//====================================================================


// $food = ['alo', 'potol', 'alo', 'kumara', 'gazor', 'folkopi'];

$food = [
    'food' => 'apple',
    'name' => 'oabydulla',
    'age' => 27
];

// echo "<pre>";
// print_r($food);

// Array convert to jason use php function
$json_data = json_encode($food);


$array_data  = json_decode($json_data);

// echo "<pre>";
// print_r($array_data);

echo $array_data->name;







</script>
