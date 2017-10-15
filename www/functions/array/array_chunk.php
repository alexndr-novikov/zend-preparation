<?php use \Doc\helpers\HTML;

HTML::h1('array_chunk()');


$array = [
    0, 0, 0,
    0, 0, 1,
    0, 1, 0,
    0, 1, 1,
    1, 0, 0,
    1, 0, 1,
    1, 1, 0,
    1, 1, 1
];

$newArray = array_chunk($array, 3);
$newArraySaveKeys = array_chunk($array, 3, true);

HTML::pre($newArray);
HTML::pre($newArraySaveKeys);


$array = [
    0, 0, 1,
    0, 1
];
HTML::h3('Last array has less then 3 elements:');
HTML::pre(array_chunk($array, 3));



var_dump(array_chunk($array, -1)); // NULL + warning