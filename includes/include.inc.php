<?php
spl_autoload_register('autoLoader');

function autoLoader($className){
    $path  = "classes/";
    $extenssion = ".class.php";
    $fullpath = $path . $className . $extenssion;

    if(file_exists($fullpath)){
        include_once $fullpath;
    }

    
}

?>