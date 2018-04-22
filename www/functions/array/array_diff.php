<?php use \Doc\helpers\HTML;

HTML::h1('array_​diff()');
HTML::p('Values only, ignore keys');

$faker = \Faker\Factory::create();
$name1 = $faker->name;
$name2 = $faker->name;
$name3 = $faker->name;
$name4 = $faker->name;
$name5 = $faker->name;
$name6 = $faker->name;
HTML::pre([$name1, $name2, $name3, $name4, $name5, $name6]);
HTML::pre(array_diff(
    [$name1, $name2, $name3, $name4, $name5, $name6],
    [100 => $name4, $name5],
    [$name6],
    [$name1]
)); // name2 && name3
