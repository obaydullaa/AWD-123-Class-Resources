
<!-- 
  PHP part 76 ( file upload part 01  ) create input file design
  PHP part 77 ( file upload part 02  ) Add Bootstrap tooltip
  PHP part 78 ( file upload part 03  )
  
    Note: When use file use enctype="multipart/form-data" then we use $_FILES() function.
     move_uploaded_file() => For file upload

  PHP part 79 ( file upload part 04 => Unique file name )
    if(isset($_POST['upload'])){
      $file = $_FILES['profile_photo'];

      // File Info
      $file_name = $file['name'];
      $file_tmpname = $file['tmp_name'];
      $file_size = $file['size'];

      //Unique File name
      $unique_name_pro = time() . rand(1, 999999999);
      
      $unique_name = md5($unique_name_pro) . $file_name;

      //img upload function
        move_uploaded_file($file_tmpname, 'photos/' . $unique_name);

    }

    PHP part 80 (file upload part 05) remove file name
    PHP part 81 ( file upload part 06 ) file size

-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Design</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
  <?php

    if(isset($_POST['upload'])){
      $file = $_FILES['profile_photo'];

    // File Info
     $file_name = $file['name'];
     $file_tmpname = $file['tmp_name'];
     $file_size = $file['size'];
     $file_in_kb = $file_size / 1024;



    // Get file name extension
    $file_arr = explode('.',$file_name);
    $extension = end($file_arr);


    //Unique File name
    $unique_name_pro = time() . rand(1, 999999999);
    $unique_name = md5($unique_name_pro) . '.' . $extension;

    if(empty($file_name)){
    $msg = '<p class="alert alert-danger">Please Select a File ! <button class="close" data-dismiss="alert">&times;</button></p>';

    }else if(in_array($extension, ['jpg', 'png','gif','jped', 'wep']) == false){
    $msg = '<p class="alert alert-danger">Invalid file formate! <button class="close" data-dismiss="alert">&times;</button></p>';

    }else if($file_in_kb > 500){
    $msg = '<p class="alert alert-danger">File size large please upload max 500kb! <button class="close" data-dismiss="alert">&times;</button></p>';

    }else {
      //img upload function
      move_uploaded_file($file_tmpname, 'photos/' . $unique_name);
      // echo '<img src="photos/ . $unique_name">';
      $msg = '<p class="alert alert-success">File Upload Success. <button class="close" data-dismiss="alert">&times;</button></p>';

    }
    }




  ?>
    
    <div class="from-wrap">
        <div class="card">
            <div class="card-body">
                <h2 class="mb-4">File Upload</h2>
                <?php 
                    if(isset($msg)){
                      echo $msg;
                    }

                ?>
                <form action="" method="POST" enctype="multipart/form-data">
                  <div class="from-group mb-2">
                    <img width="100" id="upload_img" src="" alt="">
                  </div>
                  <div class="form-group mb-3">
                    <label for="file_upload">
                      <img width="50" src="assets/img/file-upload.png" 
                        data-bs-toggle="tooltip"
                        data-bs-placement="right" 
                        title="Profile Photo"
                      >
                    </label>
                    <input name="profile_photo" class="d-none" type="file" id="file_upload">
                  </div>
                  <div class="form-group">
                   <input name="upload" class="btn btn-success" type="submit" value="Upload Now">
                  </div>
                </form>
            </div>
        </div>
    </div>

    <script src="assets/js/jquery-3.6.3.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script>

      $(function () {
        $('[data-toggle="tooltip"]').tooltip();
      })

      $('input[name="profile_photo"]').change(function(e){
       let file_url = URL.createObjectURL(e.target.files[0]);

        $('img#upload_img').attr('src', file_url);

      });





    </script>
</body>
</html>

 