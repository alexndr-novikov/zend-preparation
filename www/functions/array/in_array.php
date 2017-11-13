<?php use \Doc\helpers\HTML;
HTML::h1('in_array()');


$array = [0, 1, 2, 3, false];

var_dump(in_array(1, $array)); // true
HTML::br();
var_dump(in_array(true, $array)); // true (==1)
HTML::br();
var_dump(in_array(true, $array, true)); // false
HTML::br();
var_dump(in_array([0, 1], [[1, 0], [1, 1]]));
HTML::br();
var_dump(in_array([0, 1], [[1, 0], [1, 1]], true));
HTML::br();
var_dump(in_array([0, 1], [[0, 1], [1, 1]]));
HTML::br();
var_dump(in_array([0, 1], [[0, 1], [1, 1]], true));
HTML::br();