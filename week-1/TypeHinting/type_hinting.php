<?php
// $age = "19";
declare(strict_types=1);
// echo var_dump($age +10);

function calcAge(int $birthday, $name) {
    echo "hey u r", 2023 - $birthday, "years olds",$name;
}
calcAge(1998, "Abdullah ");