<?php 
 function autoload($class){
    include 'assignment-2/options/'.$class.'.php';
 }
 spl_autoload_register('autoload');
