<?php 
/*
    PHP Part-31: review Loop
*/

// $i = 1;
// while($i <= 10){
//     echo "5 x $i = .($i * 5) $i. \n";
//     $i++;
// }

// for($i = 20; $i >= 10; $i++){
//     echo "5 x $i = .($i * 5) $i. \n";
// }

// This loop round will be 50 and initial value 10k use increment Operator;
// for($i = 10000; $i <=10050; $i++){
//  echo "Value $i" ."\n";
// }


 for($i = 1; $i < 500; $i = $i+3){
    // echo "Value $i"."\n";
    echo $i. "\n";
    if($i % 11 == 0 ){
        break;
    }
 }
