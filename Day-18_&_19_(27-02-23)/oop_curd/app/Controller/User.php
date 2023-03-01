<?php

/**
 * User Management System
 */

 class User extends Database {
    
    /**
     * User add to database
     */
    
    public function userTomeJao($name, $email, $cell, $username) {

        parent::create("INSERT INTO users (name, email, cell, username) VALUES('$name', '$email', '$cell', '$username' )");

    }

    /**
     * All Users
     */

     public function sobUserCholeAso()  {
        return parent::all("users" );
     }



    
 }
