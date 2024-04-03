<?php


// Assignment 2: Build Expense tracker CLI app
// Build a simple CLI application for ]
// 1.adding income, 
// 2.adding expenses, 
// 3.viewing income/expense list, 
// 4.viewing income/expense categories, 
// 5. and viewing savings(total income-total expense).
// There should be a Category for each income and expense.

// For example, when the script runs, the user should see a list of options like the following:   

//     1. Add income
//     2. Add expense
//     3. View incomes
//     4. View expenses
//     5. View savings
//     6. View categories
   
//     Enter your option:

   
// Users can write the option and press `Enter`. Based on the given option, they might need to add more info or can see the result.
   
// Try to use OOP concepts.
   
// Make sure to store the data in files so that the data persists after the script ends and the script can use the stored data next time.

echo "\n \tWelcome to the Expense tracker \n \n";
echo   "1. Add income\n";
echo   "2. Add expense\n";
echo   "3. View incomes\n";
echo   "4. View expenses\n";
echo   "5. View savings\n";
echo   "6. View categories\n \n";


$option =strtolower( readline("  Please Enter the Options Name:"));
echo "\n";
echo $option;