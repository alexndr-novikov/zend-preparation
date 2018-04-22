<?php use \Doc\helpers\HTML;

HTML::h1('array_change_key_case()');


$array1 = [
    'foo' => 1,
    'BAR' => 2,
];

$array2 = [
    'key' => 1,
    'KEY' => 2,
    'Key' => 3,
];



HTML::h3('To lower:');
HTML::pre(array_change_key_case($array1, CASE_LOWER));
HTML::h3('To upper:');
HTML::pre(array_change_key_case($array1, CASE_UPPER));


HTML::h3('Same keys after transform resolve:');
HTML::pre(array_change_key_case($array2));

var_dump(array_change_key_case('not an array')); //NULL + warning
