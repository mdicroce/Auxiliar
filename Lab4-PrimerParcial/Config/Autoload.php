<?php
    namespace Config;
    spl_autoload_register(function($classPath){
        $classPath = strtolower($classPath . ".php");
        $path = str_replace("\\","/",$classPath );
        $path = str_replace("\\","/", dirname(__DIR__) . "/" . $path);
        require_once($path);
    })
?>