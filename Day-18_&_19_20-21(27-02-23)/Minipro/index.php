<?php 

include_once "vendor/autoload.php";

use App\Controllers\Staff;

$staff = new Staff;
// echo $staff -> amni('123456');
if(isset($_POST['up'])) {
    $staff->amni($_FILES['photo']); 
}

?>

<form class="mt-4" action="" method="POST" enctype="multipart/form-data">
    <input name="photo" type="file">
    <input name="up" type="submit" value="upload">
</form>
