<?php

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

        alert(name + email + cell + username);

        return false;
    });

</script>
