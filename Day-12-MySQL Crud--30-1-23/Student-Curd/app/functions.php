<?php
/**
 * Data create by create
 */
   function create($sql) {
      connect()->query($sql);
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
function find($table, $id) {
   $data = connect()->query("SELECT * FROM $table WHERE id='$id'");
	return $data->fetch_object();
}


/**
 * Data create by create
 */
function delete($table, $id) {
   connect()->query("DELETE FROM $table WHERE id='$id' ");
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

 /**
  * File upload function
  */

  function move($file, $location='/', array $type = ['jpg', 'png', 'gif', 'jpeg']) {

   // File management
   
   $file_name = $file['name'];
   $file_name_tmp = $file['tmp_name'];
   $file_arr = explode('.', $file_name);
   $file_ext = end($file_arr);
   $unique_name = md5(time() . rand()) . '.' . $file_ext;

   $msg = '';
   if(in_array($file_ext, $type) == false) {
      $msg = validate('Invalid file format');
   } else {
      // Upload File
      move_uploaded_file($file_name_tmp, $location . $unique_name);
   }

   return [
      'unique_name' => $unique_name,
      'err_msg'     => $msg
   ];
   
  }
  