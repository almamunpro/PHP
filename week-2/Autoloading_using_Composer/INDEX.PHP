<?PHP

require "vendor/autoload.php";// composer dump-autoload "na thakle"

$faker = Faker\Factory::create();
// generate data by calling methods
echo $faker->name();

