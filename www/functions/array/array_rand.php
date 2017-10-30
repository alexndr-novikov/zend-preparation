<?php use \Doc\helpers\HTML;
HTML::h1('array_rand()');


$array = explode(' ', 'array of some elements for testing');

HTML::pre(array_rand($array, 3)); // keys array
HTML::pre(array_rand($array, 3)); // keys array
HTML::p(array_rand($array, 1)); // key (int)
var_dump(array_rand($array, 10)); // NULL + warning


var_dump(array_rand($array, [])); // NULL + warning
var_dump(array_rand($array, '')); // NULL + warning