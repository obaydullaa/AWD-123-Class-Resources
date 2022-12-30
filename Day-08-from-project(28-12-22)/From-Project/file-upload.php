
<!-- 
  PHP part:  67 ( Data send by a form  ) // From design
  PHP part:  68 ( form setup )
  PHP part:  69 ( form Validation )
  PHP part:  70 ( form Validation Required)
  PHP part:  71( form Validation email)
  PHP part:  72(Project Upload in github)
  PHP part:  73(email check)
     end() => for get array last child.
  ** filter_var($email, FILTER_VALIDATE_EMAIL) = for email validation.

  PHP part:  74(Project Upload in github)
  PHP part 75 ( cell validation )

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
                    <label for="file_upload"><img width="100" src="assets/img/file-upload.png" alt=""></label>
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

 