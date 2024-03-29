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


</script>
