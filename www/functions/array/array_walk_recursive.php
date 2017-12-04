<?php use \Doc\helpers\HTML;
HTML::h1('array_walk_recursive()');


$array = [
    'a',
    'b',
    range('a', 'g'),
    'c',
    'd',
];
$prefix = 'pref_';
var_dump(array_walk_recursive($array, function (&$item, $key, $prefix) {
    $item = "{$prefix}{$item}";
}, $prefix));
HTML::pre($array);