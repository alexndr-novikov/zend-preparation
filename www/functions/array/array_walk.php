<?php use \Doc\helpers\HTML;

HTML::h1('array_walk()');


$array = range('a', 'g');
$prefix = 'pref_';
var_dump(array_walk($array, function (&$item, $key, $prefix) {
    $item = "{$prefix}{$item}";
}, $prefix));
HTML::pre($array);
