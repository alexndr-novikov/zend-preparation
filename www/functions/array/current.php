<?php use \Doc\helpers\HTML;

HTML::h1('current()');

$array = range('a', 'h', 2);

HTML::p(current($array));
next($array);
HTML::p(current($array));
next($array);
HTML::p(current($array));
next($array);
HTML::p(current($array));
next($array);
var_dump(current($array));
HTML::br();
$array = [];
var_dump(current($array));

HTML::br();
HTML::p(current([1]));
