<?php

/**
* Validate function for error message
 */

 function validate($msg, $type='danger') {
    return "<p class=\"alert alert-$type\"> $msg ! <button class=\"close\" data-dismiss=\"alert\"> &times;</button> </p>";
 }