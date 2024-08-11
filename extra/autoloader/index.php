
<?php
include "../laravel_course/extra/autoloader/includes/house.class.php";
include "../laravel_course/extra/autoloader/includes/person.class.php";
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
            <title></title>
</head>
<body>
<?php
$person1 = new Person("Daniel", 28); 
echo $person1->getPerson();
echo "<br>";