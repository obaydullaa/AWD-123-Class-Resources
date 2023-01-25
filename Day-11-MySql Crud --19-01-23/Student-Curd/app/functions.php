<?php
/**
 * Data create by create
 */
   function create() {
      
   }

/**
 * Data create by create
 */
   function all($table, $order='DESC') {
      return connect()->query("SELECT * FROM $table ORDER BY id $order");
   }
 
/**
 * Data create by create
 */
function find() {

}


/**
 * Data create by create
 */
function delete() {

}

/**
 * Data create by create
 */
function update() {

}



/**
* Validate function for error message
 */
 function validate($msg, $type='danger') {
    return "<p class=\"alert alert-$type\"> $msg ! <button class=\"close\" data-dismiss=\"alert\"> &times;</button> </p>";
 }