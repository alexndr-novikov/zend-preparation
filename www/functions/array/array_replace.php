<?php use \Doc\helpers\HTML;

HTML::h1('array_replace()');

$array = [
    'some',
    'values',
    'to',
    'be',
    'replaced'
];

$replace1 = [0 => 'not all'];
$replace2 = [0 => 'all other', 10 => 'later'];
HTML::pre(array_replace($array, $replace1, $replace2));