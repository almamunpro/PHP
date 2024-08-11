<?php

require_once './assignment-2/autoload.php';
require_once './assignment-2/options/main.php';

echo "\n \tWelcome to the Expense tracker \n \n";
echo   "1. Add income\n";
echo   "2. Add expense\n";
echo   "3. View incomes\n";
echo   "4. View expenses\n";
echo   "5. View savings\n";
echo   "6. View categories\n \n";


$option =strtolower( readline("  Please Enter the Options Name:"));
echo "\n";