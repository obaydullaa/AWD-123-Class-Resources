<?php 

namespace App\Controllers;

use App\Facade\Str;

class Staff {

    
    public function amni($text) {
        return Str::hat($text, 'u');
    }


}

