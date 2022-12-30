
<!-- 
  PHP part 76 ( file upload part 01  ) create input file design
  PHP part 77 ( file upload part 02  ) Add Bootstrap tooltip

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
    
    <div class="from-wrap">
        <div class="card">
            <div class="card-body">
                <h2 class="mb-4">File Upload</h2>
                <form action="" method="POST">
                  <div class="form-group mb-3">
                    <label for="file_upload">
                      <img width="50" src="assets/img/file-upload.png" 
                        data-bs-toggle="tooltip"
                        data-bs-placement="right" 
                        title="Profile Photo"
                      >
                    </label>
                    <input class="d-none" type="file" id="file_upload">
                  </div>
                  <div class="form-group">
                   <input class="btn btn-success" type="submit" value="Upload Now">
                  </div>
                </form>
            </div>
        </div>
    </div>

    <script src="assets/js/jquery-3.6.3.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>

 