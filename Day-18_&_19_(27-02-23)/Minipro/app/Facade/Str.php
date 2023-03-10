<?php 

namespace App\Facade;

trait Str {
    /**
     * Test transform Class 
     */
    public static function hat($text, $type="c") {

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

        return "<span style=\"text-transform:$trans;\">$text</span>";
    }
    
}