<?php use \Doc\helpers\HTML;
HTML::h1('end()');


$array = [];
$array[2] = 2;
$array[1] = 1;
$array[0] = 0;
HTML::pre($array);
var_dump(end($array));
HTML::br();
var_dump(prev($array));
HTML::br();
var_dump(prev($array));
HTML::br();
var_dump(prev($array));
HTML::br();
var_dump(end($array));