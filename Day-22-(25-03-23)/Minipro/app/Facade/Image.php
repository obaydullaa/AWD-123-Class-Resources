<?php 

namespace App\Facade;

trait Image {

    public function move($file_info, $path) {
        $file_name = $file_info['name'];
        $file_temp_name = $file_info['tmp_name'];

        $unique_name = $this->uniqueName($file_name);

        move_uploaded_file($file_temp_name, $path . $unique_name);
        return [
            'file_name' => $unique_name
        ];
    }

    /**
     * Unique name generate
     * 
     */

     public function uniqueName($file_name) {
        $file_arr = explode('.', $file_name);
        $file_extension = end($file_arr);
        return md5(time().rand()) . '.' . strtolower($file_extension);
     }

    
}