/**
***** 2 April 2023
*****====================*****
* Crud Applications
 */

 /**
  * Step 01:
  *================================
  *   Form tag wrap and method post if file upload when use  enctype="multipart/form-data" if we manage from another file when we used action='from.html other wis empty'. finally every input tag use name for get specific element.
  */
 <!--  -->
        <?php
            if(isset($_POST['insert'])) {
                // Form value
                $name = $_POST['name'];
                $email = $_POST['email'];
                $cell = $_POST['cell'];
                $roll = $_POST['roll'];
            }
    ?>
        <div class="form-group">
            <label for="">Name</label>
            <input name="name" class="form-control" type="text">
        </div>

        /**
        * Step 02: 
        *=====================================================
        *All Input filed Validation.
        */


    <?php
		if(empty($name) || empty($email) || empty($cell) || empty($roll) ){
			// $msg = "All Fields Are Required.";
			$msg = "<p class=\"alert alert-danger\" >All filed are required..! <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
		}else {
			$msg =  "<p class=\"alert alert-danger\">Data is stable. <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
		}
        ?>

    <h2>Sign Up</h2>
    <?php 
        if(isset($msg)){
            echo $msg;
        } 
    ?>


    /**
    * Step 03: 
    *=====================================================
    *All Single Input filed Validation.
    */
    <?php
        if(empty($name)){
            $err['name'] = "<p style='color: red;'>*Required <p>";
        }
    ?>

    <div class="form-group">
        <label for="">Name</label>
        <input name="name" class="form-control" type="text">
        <?php
            if(isset($err['name'])) {
                echo $err['name'];
            }
        ?>
	</div>

/**
*  Step 04: EMail Validation
* ==============================
 */
 <?php
    else if(filter_var($email, FILTER_VALIDATE_EMAIL)== false){
                
        $msg = "<p class=\"alert alert-warning\" >Invalid Email Address..! <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
    }


/**
 * Step: 05: Target mail check
 */
if(isset($email)){
    $email_arr = explode('@', $email);
    $inst_mail = end($email_arr);
}

else if($inst_mail !== 'gmail.com'){
    $msg = "<p class=\"alert alert-warning\" >Please Valid mail..! <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";

}


/**
 * Step 05: Cell number validation
 * =========================================================
 * 
 */

 if(isset($cell)){
    $cell_start = substr($cell, 0, 3);
}
else if(in_array($cell_start, ['013', '014', '015', '016', '017', '018', '019']) == false) {
    $msg = "<p class=\"alert alert-warning\" >Please Valid Phone Number..! <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
}



