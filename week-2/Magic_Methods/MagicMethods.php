<?php 
//Life cycle hope 
class Person
{
    public function __construct()
    {
        printf(format:"Initializing");
    }
    public function walk()
    {
        printf("Walkinge");
    }
    public function __destruct()
    {
        printf(" destructing");
    }
    public function __call(String $method,array $args)
    {
        var_dump($method);
        var_dump($args);
    }

}

$person = new Person();
$person-> walk();
$person-> sing('asdf');
