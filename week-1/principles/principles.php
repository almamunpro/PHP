<?php

class Vehicle{
    public function start(){

    }

    public function stop(){

    }
}
// Inheritance
// object -> is a -> true
class Bike extends Vehicle{

}
class User{
    public $role;
    public function login(){

    }
}



class Employee extends User{
    public string $name;
    public string $address;
    public int $dob;

    public function getAge() {
        // calculate age based on 'dob'
    }   
}

$employee = new Employee();
$employee->Login();