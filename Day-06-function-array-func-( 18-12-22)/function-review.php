<?php

/**
 * PHP Part: 42(Review Function )
 */

// function areaCal($length= null, $width = null, $type = 'r'){
//     if($type == 'r'){
//         $area = $length * $width;
//         return "Area = $area";
//     }else if($type == 's'){
//         $area = $length * $length;
//         return "Area = $area";
//     }else if($type == 'c'){
//         $area =3.1426 * ($length * $length ) ;
//         return "Area = $area";
//     }
// }

// echo areaCal(100, null, 'c' );


// function bmi($m, $h){
//    $height = $h * 0.3048;
//     $bmi = $m / ($height * $height);
//     echo "BMI = $bmi";
// }

// bmi(80, 5.8);

// function headingText($text, $color) {
//     $text_color = '';
//     switch($color){
//         case 'lal':
//             $text_color = 'red';
//             break;
//         case 'nil':
//             $text_color = 'blue';
//             break;
//         case 'soboj':
//             $text_color = 'green';
//             break;
//         case 'golapi':
//             $text_color = 'pink';
//             break;
//         case 'komola':
//             $text_color = 'orange';
//             break;
//             default :
//             $text_color = 'black';
//             break;
//     }
//     echo "<h1 style='color: $text_color;'>$text</h1>";
// }

// headingText('Obaydulla', 'soboj');

function img($img_name, $width, $height) {
    echo "<img src='$img_name .' width='.$width.': height='. $height.'/>";
    echo '<img src="'.$img_name.'" width="'.$width.'" height="'.$height.'" >';
}
img('baby.jpg', 300,300);