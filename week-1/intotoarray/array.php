<?php
// $bestfriends = ["fahim", "rehan", "anik", "mohinul"];
// print_r($bestfriends);

// echo $bestfriends[2];

$student = [
    "name" => "Abdullah Al Mamun",
    "Id" => 201071043,
    "batch" => 23,
    "result" => [
        "first_semester" => 4.00,
        "second_semester" => 3.96,
        "third_semester" => 3.84
    ]
];

echo $student["name"];
// print_r($student['Id']);

echo $student["result"]["first_semester"];