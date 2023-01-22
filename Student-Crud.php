// Note project
1. Template setup
2. Connection function


/**
* Student Crudv part 01 & 2 ( Template setup & Connect function)
*/

Folder: app-> db.php * functions.php 
db.php:- 

    /**
    * Make a Database connection
    */

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'stc';

    function connect() {
        global $host, $user, $pass, $db; // global variable
        return $connection = new mysqli($host, $user, $pass, $db);
    }

    /**
     * Student Crud part 03 ( Students Table  )
     */
     // Create student database table.

    