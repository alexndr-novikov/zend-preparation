<?php use \Doc\helpers\HTML;
HTML::h1('array_combine()');

$dataFactory = Faker\Factory::create();

$keys = [$dataFactory->firstName(), $dataFactory->firstName(), $dataFactory->firstName()];
$values = [$dataFactory->numberBetween() , $dataFactory->numberBetween() , $dataFactory->numberBetween()];

HTML::pre(array_combine($keys, $values));


$keys = [$key = $dataFactory->firstName(), $key, $key];
$values = [$dataFactory->numberBetween() , $dataFactory->numberBetween() , 10];

HTML::pre(array_combine($keys, $values)); // duplicate key, last pair overrides all others, no warning



HTML::pre(array_combine([], [])); // empty arrays ok since 5.5


var_dump(array_combine([1, 2], [1, 2, 3])); // false + Warning, array's length differs
var_dump(array_combine([1, 2, 3], [1, 2])); // false + Warning, array's length differs