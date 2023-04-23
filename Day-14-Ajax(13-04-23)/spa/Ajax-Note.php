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

    // get valu from input and store variable.~

    $(document).on('submit','#student_form', function() {
        let name = $('#name').val();
        let email = $('#email').val();
        let cell = $('#cell').val();
        let username = $('#username').val();

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
                alert('Student added successful ');
                // data reset
                $('#name').val('');
                $('#email').val('');
                $('#cell').val('');
                $('#username').val('');
            }
        })

        return false; 
    });
    
    // Get value and pus in mysql server
    $name = $_POST['name'];
    $email = $_POST['email'];
    $cell = $_POST['cell'];
    $username= $_POST['username'];

    $connection = new mysqli('localhost', 'root', '', 'ajax');
    $connection->query("INSERT INTO students (name, email, cell, username) VALUES ('$name', '$email', '$cell', '$username')");


</script>
