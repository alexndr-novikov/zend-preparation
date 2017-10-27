<?php use \Doc\helpers\HTML;

HTML::h1('array_pop()');


$array = [0, 1, 2, 3, 4];

HTML::p(array_pop($array)); // 4
HTML::p(array_pop($array)); // 3
HTML::p(array_pop($array)); // 2
HTML::p(array_pop($array)); // 1
HTML::p(array_pop($array)); // 0
var_dump(array_pop($array)); // NULL
var_dump(array_pop($array)); // NULL

$a = '';
var_dump(array_pop($a)); // NULL + warning