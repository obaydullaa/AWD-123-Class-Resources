<?php 

namespace App\Controllers;

use App\Facade\Str;
use App\Facade\HASH;

class Staff {
    public function amni($text) {
        // return Str::hat($text, 'u');
        // return Str::slug($text);
        return HASH::make($text);
    }
}

