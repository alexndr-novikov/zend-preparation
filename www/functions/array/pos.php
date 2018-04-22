<?php use \Doc\helpers\HTML;

HTML::h1('pos()');

$array = range('a', 'h', 2);

HTML::p(pos($array));
next($array);
HTML::p(pos($array));
next($array);
HTML::p(pos($array));
next($array);
HTML::p(pos($array));
next($array);
var_dump(pos($array));
HTML::br();
$array = [];
var_dump(pos($array));

HTML::br();
HTML::p(pos([1]));
