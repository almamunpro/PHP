<?php
// function sayhi(){
//     echo "hi, how are you?";
//     echo "<br/>";
// }
// sayhi();


$years =[2002, 2003, 2004, 2005, 2006, 2007, 2008, 2009] ;

// $incremenyear = function ($years){
//     return $years += 10;
// };
// $updateyear = array_map($incremenyear,$years);

// print_r( $updateyear);

$chat = function($message){
    echo $message;

};

// $chat("hello world");


// implementing Callback with anonymous functions

// function greet($name, $customGreetings){
//     echo "Hello, $name!";
//     $customGreetings();
// }

// greet("Mamun", function(){
//     $time = date('h:i');
//     echo "Have a great day! It's {$time}" ;
// });


$username = "Abdullah";

$greetings = [
    "Hello", //english greeting
    "Hola", //spanish greeting
    "merhaba", //turkish greeting
    "أمنيات", //arabic greeting
];

$formattedGreetings = array_map(function ($greeting) use ($username){
    return "$greeting, $username!";
}, $greetings);
$formattedGreetings = array_map(fn ($greeting) => "$greeting, $username!", $greetings);


function display($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}


$data = [
    "name" => "Abdullah",
    "age" => 25,
    "city" => "Istanbul",
];

display($formattedGreetings);