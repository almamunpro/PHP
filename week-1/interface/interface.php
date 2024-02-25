<?php
abstract class Vehicle{
    abstract public function getBaseFare():int;

    abstract public function getPerkiloFare(): int;

    public function getTotal(int $kilo){
        return $this->getBaseFare() + ($kilo * $this->getPerkiloFare());
    }

    

}

interface HourlyRentable{
    public function getHourlyRate():int;
}
interface DailyRentable{
    public function getDailyRate():int;
}

class Car extends Vehicle implements HourlyRentable{
    public function getBaseFare():int{
        return 50;
    }
    public function getPerkiloFare():int {
        return 10;
    }
    public function getHourlyRate():int {
        return 100;
    }


}
class Bikes extends Vehicle{
    public function getBaseFare():int{
        return 20;
    }
    public function getPerkiloFare(): int {
        return 5;
    }
}

class CNG extends Vehicle implements HourlyRentable, DailyRentable{
    public function getBaseFare():int{
        return 30;
    }

    public function getPerkiloFare():int {
        return 7;
    }
    public function getHourlyRate():int {
        return 50;
    }
    public function getDailyRate():int {
        return 1000;
    }
}

$car = new Car();
$total = $car->getTotal(5);
var_dump($total);