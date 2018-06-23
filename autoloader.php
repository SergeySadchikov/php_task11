<?php
spl_autoload_register('load_class');
    function load_class($class)
    {
     $pathToFile = __DIR__.DIRECTORY_SEPARATOR.str_replace('\\', DIRECTORY_SEPARATOR, $class).'.php';
        if (file_exists($pathToFile)) {
            require_once "$pathToFile";
        } else { 
        	echo "Класс ".$pathToFile." не найден !<br>";
        }
    }
?>
