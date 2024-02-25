<?php
// Build a simple PHP CLI tool (Count the alphabet in the given sentence)

$sentence = readline();

// $count = explode(",", $sentence);
$count = str_split($sentence,1);
$alphabet=0;
$lenth = count( $count);
for ($i= 0; $i < $lenth; $i++){
    if(ctype_alpha($count[$i])){
        $alphabet++;
    }
}
print_r ( $alphabet);
