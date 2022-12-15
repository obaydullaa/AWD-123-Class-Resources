<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Document"; ?></title>
</head>
<body>

    <!-- 
        PHP-part: 13 PHP in HTML
        html in php  
    -->
    <h1><?php echo "Laravel Developer"; ?></h1>
    <p><?php echo "Lorem ipsum dolor sit amet."; ?></p>
    <a href="#"><?php echo "Read More"; ?></a>

    <!-- 
        PHP-part: 14 PHP in HTML 
        html in php  
    -->
    <?php
    
    echo " <h1 class='box'>I am Laravel Developer </h1>";

    echo __DIR__;
    echo "\n";
    echo __LINE__;



    ?>
</body>
</html>