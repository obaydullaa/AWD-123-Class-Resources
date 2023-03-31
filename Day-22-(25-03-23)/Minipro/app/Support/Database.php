<?php

/**
 * Database Management System
 */

 namespace App\Support;
 use mysqli; 

 abstract class Database {
	
    private $host = 'localhost';
    private $user = 'root';
    private $pas = '';
    private $db = 'minipro';
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
    protected function create (string $table, array $data) {
        // Get col name
        $arr_key = array_keys($data);
        $db_col = implode(',', $arr_key);
    
        // Get Values
        $arr_val = array_values($data);
        $data_str = '';
        foreach($arr_val as $val) {
            $data_str .= "'". $val. "',";
        }
        $data_val =  substr($data_str, 0, -1);
        

        $this -> connection()-> query("INSERT INTO $table ($db_col) VALUES($data_val)");
    }

    /**
    * find Data
    */
    protected function find ($table, $id) {
      $data = $this -> connection()-> query("SELECT * FROM $table WHERE id=$id");
      return $data -> fetch_object();
    }

    /**
    * delete Data
    */
    protected function delete ($table, $id) {
      $this-> connection() -> query("DELETE FROM $table WHERE id = '$id' ");
    }
    /**
    * update Data
    */

    protected function update (string $table, int $id, array $data) {
        
        $query_string = '';
        foreach($data as $key => $value) {
            $query_string .= $key ."= '" .$value . "', ";
        }
        
        $update_str = substr($query_string, 0, -2);

        $this->connection()->query("UPDATE $table SET $update_str WHERE id='$id'");
    }

    /**
    * all Data
    */
    protected function all ($table, $order='DESC') {
      return $this-> connection() -> query("SELECT * FROM $table ORDER by id $order");

    }

    /**
    * where Data
    */
    protected function where () {

    }

    /**
    * onWhere Data
    */
    protected function onWhere ( ) {

 }

 }