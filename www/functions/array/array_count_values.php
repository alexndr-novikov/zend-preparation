<?php use \Doc\helpers\HTML;

HTML::h1('array_count_values()');

$dataFactory = \Faker\Factory::create();

$name = $dataFactory->name();

$number = $dataFactory->numberBetween();

$unique = $dataFactory->safeColorName;

$date = $dataFactory->dateTime;

$array = [$name, $number, $name, $number, $name, $unique, $name, $date, $date]; // 4 names, 2 numbers, 1 color + 2 warnings

HTML::pre(array_count_values($array));
