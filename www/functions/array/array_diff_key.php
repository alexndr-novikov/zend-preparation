<?php use \Doc\helpers\HTML;

HTML::h1('array_diff_key()');
HTML::p('Key only, ignore value');


HTML::pre(array_diff_key([0, 1, 2, 3], [100, 100, 100, 100])); // empty array

HTML::pre(array_diff_key(
    [0, 1, 2, 3],
    ['0' => 'any value', '1' => 'any value', '2' => 'any value', '3' => 'any value']
)); // still empty array


$faker = \Faker\Factory::create();
$key1 = $faker->name;
$key2 = $faker->name;
$key3 = $faker->name;
$key4 = $faker->name;
$key5 = $faker->name;
$key6 = $faker->name;
HTML::pre([1 => $key1, $key2, $key3, $key4, $key5, $key6]);
HTML::pre(array_diff_key(
    [
        $key1 => rand(0, 100),
        $key2 => rand(0, 100),
        $key3 => rand(0, 100),
        $key4 => rand(0, 100),
        $key5 => rand(0, 100),
        $key6 => rand(0, 100),
    ],
    [
        $key1 => rand(0, 100),
        $key2 => rand(0, 100),
    ],
    [
        $key5 => rand(0, 100),
    ]
)); // key3, key4, key6

array_diff_key('', ''); //warning
