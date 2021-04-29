<?php
    namespace config;

    spl_autoload_register(function($classPath){
        $classPath = strtolower($classPath . ".php");
        $path = str_replace("\\","/",$classPath );
        $path = str_replace("\\","/", ROOT . "/" . $path);
        require_once($path);
    })
?>