<?php

/**
 * User Management System
 */

 class User {
    
    private $host = 'localhost';
    private $user = 'root';
    private $pas = '';
    private $db = 'oop129';
    private $connection;


    /**
     * Database Connection
     */

     public function connection() {
        return $this->connection = new mysqli($this->host,$this->user,$this->pas, $this->db);
     }

    /**
    * Create Data
    */
    protected function create () {

    }

    /**
    * find Data
    */
    protected function find () {

    }

    /**
    * delete Data
    */
    protected function delete () {

    }
    /**
    * update Data
    */
    protected function update () {

    }

    /**
    * all Data
    */
    protected function all () {

    }

    /**
    * where Data
    */
    protected function where () {

    }

    /**
    * onWhere Data
    */
    protected function onWhere () {

    }
    




    
 }