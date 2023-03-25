<?php 

namespace App\Controllers;

use App\Facade\Str;
use App\Facade\HASH;
use App\Facade\Image;

class Staff {
    use Image;
    public function amni($data) {
        // return Str::hat($text, 'u');
        // return Str::slug($text);
        // return HASH::make($text);

        $this->move($data, 'photos/');
    }
}

