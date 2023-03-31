<?php 

namespace App\Controllers;

use App\Support\Database;
use App\Facade\HASH;
use App\Facade\Image;

class Student extends Database {
    use Image;

    /**
     * create new student
     */
    public function createNewStudent($name, $email, $cell,$pass, $photo ) {
    //    return $this-> create();
    //    return parent::create();
    // echo "<pre>";
   $file_name =  $this -> move($photo, 'photos/students/');

    $this -> create('student', [
        'name' => $name,
        'email' => $email,
        'cell' => $cell,
        'password' => HASH::make($pass),
        'photo' => $file_name['file_name']
    ]);

    }


    /**
     * Get all students
     */
    public function allStudent() {
        return $this -> all('student');
    }

    /**
     * Delete Student
     */
    public function deleteStudent($id) {
         $this -> delete('student', $id);
    }

    /**
     * Single Student
     */
    public function showSingleStudent($id) {
        return  $this -> find('student', $id);
    }
    /**
     * Edit info
     */
     public function editInfo($id) {
        return $this -> find('student', $id);
     }

     /**
      * Updated student Data
      */

      public function updateStudentData($name, $email, $cell,$old_photo,$new_photo, $id ){

        if(empty($new_photo['name'])){
            $photo_name = $old_photo;
        }else {
            $p_name = $this -> move($new_photo, 'photos/students/');
            $photo_name = $p_name['file_name'];

            unlink('photos/students');
        }

        $this -> update('student', $id, [
            'name' => $name,
            'email' => $email,
            'cell' => $cell,
            'photo' => $photo_name,
        ]);
      }

}