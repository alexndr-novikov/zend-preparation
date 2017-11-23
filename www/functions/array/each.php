<?php use \Doc\helpers\HTML;
HTML::h1('each()');

$array = array_combine(range(10, 15), range(100, 150, 10));

var_dump(each($array));
HTML::br();
var_dump(each($array));
HTML::br();
var_dump(each($array));
HTML::br();
var_dump(each($array));
HTML::br();
var_dump(each($array));
HTML::br();
var_dump(each($array));
HTML::br();
var_dump(each($array));
HTML::br();
reset($array);
var_dump(each($array));