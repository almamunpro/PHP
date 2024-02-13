<?php
// string functions
// strlen()

// $massage = "Never gonna Give You Up! Never Gonna Give You Up Let You Down! Never Gonna Give You Up:";

// echo strlen($massage);
// ucfirst()
// echo ucfirst($massage);
// lcfirst()
// echo lcfirst($massage);

// echo Strtolower($massage);

// echo Strtoupper($massage);

// ucwords()

// echo ucwords($massage);

// strwordscount()

// echo str_word_count($massage);
// explode()
$tags = "javascript, php, html, css";

// print_r(
//     explode(',', $tags)
// );

// implode()
// join()

$tags = ["javascript", "php", "html", "css"];
// echo join(' | ', $tags);


// echo number_format(5305000.6734343,2,"$", "|" );

// date
// echo "current date: " . date("Y-m-d ", time());
// echo time() . " seconds";  
// lifegetcontents

// echo file_get_contents('users.txt');

// unlink('users.txt');

file_exists('users.txt');

$filename = 'users.txt';
if(file_exists($filename)){
    echo "file exists";
}else{
    echo "file not exists";
}