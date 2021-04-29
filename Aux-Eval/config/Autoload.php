<?php 
namespace Config;

    class Autoload{
        public static function Start()
        {
            spl_autoload_register(function($className)
            {
                $classpath = ucwords(str_replace("\\","/",ROOT.$className).".php");
                
                include_once($classpath);
            });
        }
    }