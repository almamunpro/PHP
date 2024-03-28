<?php
class Driver
{
    protected Vehicleinterface $vehicle;

    public function __construct(Vehicleinterface $vehicle)
    {
        $this->vehicle = $vehicle;
    }

    public function startRide()
    {
        $this -> vehicle-> start();
    }
}
//program to an interface


interface Vehicleinterface{
     public function start();
}



// tightly coupled // loosely coupled
class Bike implements VehicleInterface
{   
    public function start()
    {
        printf(format: "Bike started");
    }
}
class Car implements Vehicleinterface
{
    public function start(){
        printf(format: "car started");
    }
}


$bike = new Bike();
$car = new Car();
$driver = new Driver($bike);
$driver = new Driver($car);
$driver -> startRide();