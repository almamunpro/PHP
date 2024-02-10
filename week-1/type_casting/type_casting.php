<?php 
declare(strict_types=1);

// $userAge = "25";

// $minimumAge = 18;

// if ((int)$userAge >= $minimumAge) {
//     echo "You are eligible to vote!";
// }else{
//     echo "You are not eligible to vote!";
// }


// $str =  "Rice";
// $fruit = ['apple', 'orange'];
// var_dump((bool) $str);

// $price = 100;
// var_dump((bool) $price);

// $array = [13,13,13];
// var_dump((string) $array);
// $cart = "200 tk tesla cars 300";
// var_dump((bool) $cart);
// var_dump((int) $cart);
// var_dump((array) $str);
// print_r((array) $fruit);

// var_dump((object) $fruit);
// __tostring();


//value to arrays
// $fruit = 'apple';

// var_dump((array) $fruit);
// print_r((array) $fruit);


// $fruit = true;
// print_r((array) $fruit); add hobe 1
// $fruit = false;
// print_r((array) $fruit); add hobe na kichu


// objeact to array
class Twitter{
    public $username;
    protected $tweet;
    private $joiningDate;

}

// var_dump((array) new twitter());

// array to object

$arr = (object) ["fruits" => "apple", "food"=> "burger"];
print_r($arr->fruits);