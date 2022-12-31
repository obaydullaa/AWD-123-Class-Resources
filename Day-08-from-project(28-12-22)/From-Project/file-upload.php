
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



      // Get file name extension
      $file_arr = explode('.',$file_name);
      echo $extension = end($file_arr);


     //Unique File name
     $unique_name_pro = time() . rand(1, 999999999);
     $unique_name = md5($unique_name_pro) . '.' . $extension;
     
     //img upload function
      move_uploaded_file($file_tmpname, 'photos/' . $unique_name);

    }




  ?>
    
    <div class="from-wrap">
        <div class="card">
            <div class="card-body">
                <h2 class="mb-4">File Upload</h2>
                <form action="" method="POST" enctype="multipart/form-data">
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
</body>
</html>

 