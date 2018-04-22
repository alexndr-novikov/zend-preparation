<?php use \Doc\helpers\HTML;

HTML::h1('prev()');


$array = [1, 2, 3];

next($array);
HTML::p(prev($array));
next($array);next($array);
HTML::p(prev($array));
prev($array);
var_dump(prev($array));
