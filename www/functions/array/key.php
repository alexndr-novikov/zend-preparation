<?php use \Doc\helpers\HTML;

HTML::h1('key()');

$array = range('a', 'g', 2);
$array = array_flip($array);
var_dump(key($array));
next($array);
HTML::br();
var_dump(key($array));
next($array);
HTML::br();
var_dump(key($array));
next($array);
HTML::br();
var_dump(key($array));
next($array);
HTML::br();
var_dump(key($array));
next($array);
HTML::br();

$array = range('a', 'g');
$array = array_combine(array_reverse($array), $array);
while ($canContinue = current($array) && key($array)) {
    var_dump(key($array));
    next($array);
    HTML::br();
}
