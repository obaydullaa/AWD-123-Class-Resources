<?php
/**
 * PHP part: 48 array 
 * ==================================
 * 1. count => show all array number.
 * 2. current => show first item in array.
 * 3. end =>  => show last item in array.
 * 4. next => show after first item in array.
 * 5. array_pop => last item remove in array.
 * 6. array_push => last item add in array.
 * 7. array_shift => first item remove in array.
 * 8. array_unshift =>  first item add in array.
 * 9. array_reverse  =>  arrays item reverse.
 * 10. array_unique => show array unique value
 * 11. array_slice => array value copy and create new array.
 * 12, array_splice => array value cut and create new array.
 * 
 */

//  $foods = ['apple', 'banana', 'orange'];
 
//  echo count($foods);
//  echo '<br>';
//  echo current($foods);
//  echo '<br>';
//  echo next($foods);
//  echo '<br>';
//  echo end($foods);

/**
 * PHP part: 49 array
 */

//  $foods = ['apple', 'banana', 'orange'];

//  array_pop($foods);
//  array_push($foods,'Gazor');
//  array_shift($foods);
// //  array_unshift($foods, 'Mula');

//  echo "<pre>";
//  print_r($foods);
//  echo "</pre>";

/**
 * PHP part: 50 array
 */

//  $foods = ['apple', 'banana', 'orange', 'apple', 'banana'];

// //  $foodsRevers = array_reverse($foods);

// $FoodReverse = array_unique($foods);


//  echo "<pre>";
//  print_r($foods);
//  echo "</pre>";

//  echo "<pre>";
//  print_r($FoodReverse);
//  echo "</pre>";

 /**
 * PHP part: 50 array
 */

 $foods = ['apple', 'banana', 'orange', 'alo', 'potol','sosa',];
 
$arraySlice = array_splice($foods,3,3);



echo "<pre>";
print_r($foods);
echo "</pre>";

echo "<pre>";
print_r($arraySlice);
echo "</pre>";

