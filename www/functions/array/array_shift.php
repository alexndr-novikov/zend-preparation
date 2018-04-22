<?php use \Doc\helpers\HTML;

HTML::h1('array_shift()');

$array = [10 => 0, 1,  'string_key' => true, 3, 4, 'string too' => 5, '1'];
HTML::p(array_shift($array));
HTML::pre($array); // int keys reset
HTML::p(array_shift($array));
HTML::pre($array);
HTML::p(array_shift($array));
HTML::pre($array);
HTML::p(array_shift($array));
HTML::pre($array);
HTML::p(array_shift($array));
HTML::pre($array);
HTML::p(array_shift($array));
HTML::pre($array);
HTML::p(array_shift($array));
HTML::pre($array);
var_dump(array_shift($array)); // null
HTML::pre($array); // empty array
$string = '';
var_dump(array_shift($string)); //null + warning
