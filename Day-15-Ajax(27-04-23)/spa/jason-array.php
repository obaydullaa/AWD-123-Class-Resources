<?php
// php thake data js ar kase dite hole json a conver kore dite hobe.
//====================================================================


// $food = ['alo', 'potol', 'alo', 'kumara', 'gazor', 'folkopi'];

$food = [
    'food' => 'apple',
    'name' => 'oabydulla',
    'age' => 27
];

// echo "<pre>";
// print_r($food);

// Array convert to jason use php function
$json_data = json_encode($food);


$array_data  = json_decode($json_data);

// echo "<pre>";
// print_r($array_data);

echo $array_data->name;