<?php
//  require_once __DIR__ . 'D:\laravel_course\week-2\Autoloading\Bike.php';
// require_once __DIR__ . D:\laravel_course\week-2\Autoloading\bus.php';
// require_once __DIR__ . 'D:\laravel_course\week-2\Autoloading\Bike.php';
// require_once __DIR__ . D:\laravel_course\week-2\Autoloading\bus.php';
// ................................................................
// ................................................................ -->

spl_autoload_register(function($className){
    $baseDir = "D:/laravel_course/week-2/Autoloading/classes/";
    var_dump($className);
    echo "$className";
    require_once $baseDir .  $className . ".php";
});
$Bike = new Bike();
$bus = new bus();

