<?php 

namespace App\Facade;

trait HASH {

    public static function make($password) {
        return password_hash($password, PASSWORD_DEFAULT);
    }
    
}