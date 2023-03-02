<?php

function create(string $table, array $data) {

    // Get column name
    $arr_key = array_keys($data);
    $col_name = implode(',', $arr_key);

    // get value
    $arr_val = array_values($data);
    $values = '';

    foreach($arr_val as $val) {
        $values .= $val;
    }

echo $values;

    echo "<pre>";
    print_r($values);

    echo "INSET INTO $table ($col_name) VALUES ('obaydul', 'obyadul@gmail.com','01755265017')";
}
create('users', [
    'age' => 'Obaydul',
    'phone' => 'Obaydul@gmail.com',
]);