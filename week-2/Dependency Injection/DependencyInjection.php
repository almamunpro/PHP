<?php
// dependency injection
class Driver
{
    protected Vehicle $vehicle;

    public function __construct(Vehicle $vehicle)
    {
        $this->vehicle = $vehicle;
    }

    public function setVehicle(Vehicle $vehicle)
    {
        $this -> vehicle= $vehicle; //Setter injection
    }

    public function startRide()
    {
        $this -> vehicle-> start();
    }
}

// tightly coupled // loosely coupled
class Vehicle
{
    public Engine $engine;

    public function __construct(Engine $engine)
    {
        $this->engine = $engine;
    }
}

class Engine
{
    public function __construct()
    {
        // constructor code here
    }
}

$engine = new Engine();
$vehicle = new Vehicle($engine);
$driver = new Driver($vehicle);