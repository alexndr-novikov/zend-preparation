<?php use \Doc\helpers\HTML;
HTML::h1('array_search()');


$array = [0, 1, 2, true, 3, 4, 5, '1'];

var_dump(array_search(1, $array)); // index of 1
HTML::br();
var_dump(array_search(true, $array)); // index of 1
HTML::br();
var_dump(array_search(true, $array, true)); // index of true
HTML::br();
var_dump(array_search('1', $array)); // index of 1
HTML::br();
var_dump(array_search('1', $array, true)); // index of '1
HTML::br();

var_dump(array_search('some value', $array)); // index of 0 , ==
var_dump(array_search('some value', $array, true)); // false, ===
HTML::br();