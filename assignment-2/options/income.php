<?php

  
class Income{
  public function __construct(){
    echo "a new income has been created". PHP_EOL;
    $myfile = fopen("D:/laravel_course/assignment-2/options/income.txt", "r+") or die("Unable to open file!");
    $txt = 2000;
    fwrite($myfile, $txt);
    $txt = "\n";
    fwrite($myfile, $txt);

    // Output one character until end-of-file
    while(!feof($myfile)) {
      echo fgetc($myfile);
    }
    echo "Total";
    fclose($myfile);
    echo "a new income has been created". PHP_EOL;
    
  }
}




    