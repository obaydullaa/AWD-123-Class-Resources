<?php 

include_once "vendor/autoload.php";

use App\Controllers\Staff;

$staff = new Staff;

echo $staff -> amni('123456');


