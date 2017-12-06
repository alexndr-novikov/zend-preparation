<?php use \Doc\helpers\HTML;
HTML::h1('array_replace_recursive()');


$array1 = ['apple', ['banana', 'key' => 'lime']];
$array2 = ['apple_new', ['banana_new', 'lime_new']];
$array3 = ['apple_new_2', [1 => 'banana_new_2', 'key' => 'lime_new_2']];
$array4 = ['apple_3', 'banana_3'];
$array5 = [];

HTML::pre(array_replace_recursive($array1, $array2)); // adds 'lime_new' as a new not met key
HTML::pre(array_replace_recursive($array1, $array2, $array3));
HTML::pre(array_replace_recursive($array1, $array4)); // scalar over array priority
