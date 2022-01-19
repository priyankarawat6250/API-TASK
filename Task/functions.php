<?php 
function check_server_file($url){
    $handle = @fopen($url, 'r');
    if(!$handle){
        return false;
    }else{
        return true;
    }
}

function check_local_file($url,$folder){

     
        $basename = pathinfo($value)['basename'];
          $extension = pathinfo($basename, PATHINFO_EXTENSION);
        $file_name = pathinfo($basename, PATHINFO_FILENAME);
        $file_name_original = $file_name;



        $num = 1;
        while (file_exists($folder . $file_name . "." . $extension)) {
            $file_name = (string) $file_name_original .'_'. $num;
            $basename = $file_name . "." . $extension;
            $num++;
        }

        return $file_target_location = $folder . $basename;
    
    
}
