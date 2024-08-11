<?php 
 function autoload($class){
    include '/autoloader/controllers/pages/'.$class.'.php';
 }
 spl_autoload_register('autoload');
 $Pages = new Pages();