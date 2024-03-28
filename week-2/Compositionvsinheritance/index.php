<?php

//re use

//composition
//object -> compose
//vegicle has a engine 
class Vehicle{
    private Engine $engine;
    public function start(){
        $this ->engine ->start();   
    }
}

class Ship{
    private Engine $engine;
}
class Engine{
    private $model;
    private $brand;
    public function start(){

    }


}

$vehicle = new Vehicle();

class mobile{

}
//is a 


class Apple extends Mobile{

}

class IPhone extends Apple {

}