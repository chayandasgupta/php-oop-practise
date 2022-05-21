<?php
spl_autoload_register(function($className){
    $path = strtolower(str_replace("CloudStorage\\","",$className)).".php"; // first we replace cloudstorage text because its already use as a namespace.then file name wise strtolower convert
    $path = str_replace("\\", "/", $path); // then forward slash add
    include_once($path); // then dynamiclly load or include file name. and access function of this file
});
