<?php 
// encapsulation
function shout($massage,$time){
    echo str_repeat("$massage<br/>", $time);
}

shout("hey everyone!", 5);