<?php use \Doc\helpers\HTML;

HTML::h1('array_push()');


$array = [];

$elements = [1, 2, 3];

HTML::p(array_push($array, ...$elements) . ' - new array length');
HTML::pre($array);

var_dump(array_push($newArray, 1)); // warning, NULL
var_dump($newArray); // NULL


$array = [];
$timeStart = microtime(true);

for ($i = 0; $i < 100000; $i++) {
    $array[] = $i;
}


HTML::p(microtime(true) - $timeStart);


$array = [];
$timeStart = microtime(true);

for ($i = 0; $i < 100000; $i++) {
    array_push($array, $i);
}


HTML::p(microtime(true) - $timeStart);
