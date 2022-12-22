<?php
/**
 *  PHP: Part: 44 Array
 * Array Type = 2
 *  1. Indexed array
 *  2. Associative array
 *  3. Multi-dimensional array
 * 
 *  1. Indexed array: where we don't declear array index.  
 *  $shobji = array('khachamorich', 'gazor', 'alo','potol');
 * 
 * 2. Associative array: Where we declear array key on index.
 *  $studen = (
 *      'mirpur' => 'Nurnaby vai';
 *      'obaydul' => 'gazipur';
    ) 

    3. Multi-dimensional array: It's  array in array.
 
 */


// $shobji = array('khachamorich', 'gazor', 'alo','potol');

// echo "<pre>";
// print_r($shobji);
// echo "</pre>";

// $student = [
//     'mirpur' => [
//         'sec10' => ['asraf', 'sadek'],
//         'sec11' => ['mahmud', 'wahid'],
//     ],
//     'uttara' => 'aditi',
//     'banani' => ['rony','henry'],
// ];


// echo $student['mirpur']['sec10'][0];
// echo "\n";
// echo $student['uttara'];

/**
 * PHP part: 45 array part 03
 */

//  $names = array('Nela', 'Refat', 'Nurmoni','Obaydulla');

//  foreach($names as $name){
//     echo "The Name is = $name <br>";
//  }

/**
 * PHP part: 46 array part 04
 */




//  $result = [
//     '01' => [
//         'name' => 'Rifat',
//         'age'  => '14',
//         'gender' => 'male',
//         'contact' => '01733265017',
//         'results' => [
//             'ban' => 90,
//             'eng' => 80,
//             'math' => 90,
//             'soc' => 95,
//             'rel' => 55,
//         ]
//     ],
//     '02' => [
//         'name' => 'Nela',
//         'age'  => '14',
//         'gender' => 'famel',
//         'contact' => '01733265017',
//         'results' => [
//             'ban' => 92,
//             'eng' => 81,
//             'math' => 91,
//             'soc' => 975,
//             'rel' => 88,
//         ]
//     ],
//     '03' => [
//         'name' => 'Nurmoni',
//         'age'  => '14',
//         'gender' => 'famel',
//         'contact' => '01755265017',
//         'results' => [
//             'ban' => 92,
//             'eng' => 81,
//             'math' => 91,
//             'soc' => 975,
//             'rel' => 88,
//         ]
//     ],
// ];

// echo  'Name of sutudent =' .$result['03']['name'] . '<br>';
// echo  'Name of contact =' .$result['03']['results']['ban'] . '<br>';
// echo  'Name of contact =' .$result['03']['results']['eng'] . '<br>';
// echo  'Name of contact =' .$result['03']['results']['math'] . '<br>';

// $results = [
//     [
//         'name' => 'Rohim',
//         'age'  => 6,
//         'gender' => 'famel',
//         'contact' => '01755265017',
//         'marks' => [
//             'ban' => 99,
//             'eng' => 81,
//             'math' => 91,
//             'soc' => 975,
//             'rel' => 88,
//         ]
//     ],
//     [
//         'name' => 'Korim',
//         'age'  => 18,
//         'gender' => 'famel',
//         'contact' => '01755265017',
//         'marks' => [
//             'ban' => 92,
//             'eng' => 88,
//             'math' => 96,
//             'soc' => 975,
//             'rel' => 88,
//         ]
//     ],   
// ];

// foreach($results as $result){
//     echo 'Name =' . $result['name'] . '<br>';
//     echo 'Year =' . $result['age'] . '<br>';
//     echo 'Gender =' . $result['gender'] . '<br>';
//     echo 'Contract =' . $result['contact'] . '<br>';
//     echo 'Bangla =' . $result['marks']['ban'] . '<br>';
//     echo 'English =' . $result['marks']['eng'] . '<br>';
//     echo 'Math =' . $result['marks']['eng'] . '<br>';
//     echo '<hr>';
// }



/**
 * PHP part: 47 array part 05
 */


$results = [
    [
        'name' => 'Rohim',
        'age'  => 6,
        'gender' => 'famel',
        'contact' => '01755265017',
        'marks' => [ 99, 81,91, 97,88],
    ],
    [
        'name' => 'Korim',
        'age'  => 18,
        'gender' => 'famel',
        'contact' => '01755265017',
        'marks' => [ 88, 85,93, 75,82],
    ],   
];

foreach($results as $result){
    echo 'Name =' . $result['name'] . '<br>';
    echo 'Year =' . $result['age'] . '<br>';
    echo 'Gender =' . $result['gender'] . '<br>';
    echo 'Contract =' . $result['contact'] . '<br>';
    echo 'Bangla =' . $result['marks'][0] . '<br>';
    echo 'English =' . $result['marks'][1] . '<br>';
    echo 'Math =' . $result['marks'][2] . '<br>';

    $total = 0;
    foreach($result['marks'] as $marks){
        $total += $marks;
    }

    echo "Total Marks = " . $total;

    echo '<hr>';
}