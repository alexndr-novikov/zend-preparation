<?php use \Doc\helpers\HTML;
HTML::h1('next()');

$arr = range(1, 10, 2);

HTML::p(next($arr));
HTML::p(next($arr));
HTML::p(next($arr));
HTML::p(next($arr));
var_dump(next($arr));
var_dump(next($arr));