<?php 

namespace App\Facade;

trait Str {
    public static function hat($text, $type="u") {

        switch ($type) {
            case 'u':
                $trans = 'uppercase';
                break;
            case 'l':
                $trans = 'lowercase';
                break;
            case 'c':
                $trans = 'capitalize';
                break;
            
            default:
                $trans = 'capitalize';
                break;
        }

        return "<span style=\"text-transform:$trans;\">$text </span>";

    }
    
}