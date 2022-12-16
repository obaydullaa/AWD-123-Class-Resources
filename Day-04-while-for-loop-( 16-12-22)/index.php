<?php 
/*
    PHP Part-26: if-else-review
*/
// if(true){
//     echo "Go to your profile page.";
// }else if(true){
//     echo "Go to your profile page 5.";

// }else {
//     echo "Your Password Wrong.";
// }

/*
    PHP Part-27: if-else-review
*/

/*
    PHP Part-27: if-else-review-2
*/

// $marks = 30;
// $name = 'Nela';


// $rel = '';
// if($name == 'Nela' || $name == "Nur"){
//     $rel = 'Female';
// }else {
//     $rel = 'Male';
// }

// if($marks > 33){
//  echo $name ." $rel Are Passed in the Exam";
// } else{
//  echo $name ." $rel Failed in the Exam";

// }

/*
    PHP Part-28: (switch)
*/

// $value = 'myname';

// switch ($value) {
//     case 'myname':
//      echo "Your get 1";
//      break;
//     case 'yourname':
//      echo "Your get 0";
//      break;
//      default : 
//      echo 'No search result';
// }

/*
    PHP Part-29: (=,==,===)
*/

// $age1 = '100';
// $age2 = 100;  

// if($age1 == $age2) {
//     echo "All are same";
// }else {
//     echo "All are not same";
// }

/*
    PHP Part-30: (While loop)
    PHP Loop => while, do while, for, foreach
*/
 
// $i = 0;
// while($i < 5){
//     echo "My Name is Obaydulla $i"."\n"; 
//     $i++;
// }

/*
    PHP Part-31: (do while)
    PHP Loop => while, do while, for, foreach
*/ 
// $i = 6000;

// do{
//     echo "Value = $i ";
//     $i++;
// }while($i < 5000);

/*
    PHP Part-31: (do while)
    PHP Loop =>  for
*/ 

for($i = 10; $i > 0; $i--){
    echo "value for $i ";
}