<?php use \Doc\helpers\HTML;

HTML::h1('reset()');


$array = [0,1,2,3,4,5];
HTML::p(current($array));
next($array);
next($array);
HTML::p(current($array));
var_dump(reset($array));
HTML::p(current($array));

$array = [];
var_dump(reset($array));
