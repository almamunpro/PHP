<?php 
require_once 'autoload.php';
class Main{
    function main($option)
   {
       echo " a new saving hsa been created".  PHP_EOL;
    
    if($option == "add income" || $option == "income" || $option == "1")
    {
    // call income function
        echo "income";
        

    }
    else if($option == "add expense" || $option == "expense" || $option == "2")
    {
    //call expense function
        echo " expense";
    }
    else if($option == "view incomes" || $option == "incomes" || $option == "3")
    {
    //call view incomes function
        echo " view incomes";
    }
    else if($option == "view expenses" || $option =="expenses"||$option == "4")
    {
    //call view expenses function
        echo " view expense";
    }
    else if($option == "view savings" || $option =="savings" || $option == "5")
    {
    //call view savings function
        echo " view savings";
    }
    else if($option == "view categories"||$option == "categories"||$option == "6")
    {
    //call view categories function
        echo " view categories";
    }
    else
    {
        echo " wrong option name or number";

    }
}
}
