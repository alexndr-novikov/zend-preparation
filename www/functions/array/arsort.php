<?php use \Doc\helpers\HTML;

HTML::h1('arsort()');

$array = [ 10 => 1, 2, 3, 4, 5, 6, 7, 8, 9];
arsort($array); // SORT_REGULAR
HTML::pre($array);

$array = [ 10 => 1, 2, 3, 4, 5, 6, 7, 8, 9];
arsort($array, SORT_NUMERIC);
HTML::pre($array);


$array = [ 10 => 1, 2, 3, 4, 5, 6, 7, 8, 9];
arsort($array, SORT_STRING);
HTML::pre($array);

$array = [ 10 => 1, 2, 3, 4, 5, 6, 7, 8, 9];
arsort($array, SORT_LOCALE_STRING);
HTML::pre($array);

$array = [ 10 => 1, 2, 3, 4, 5, 6, 7, 8, 9];
arsort($array, SORT_NATURAL);
HTML::pre($array);

$array = [ 10 => 1, 2, 3, 4, 5, 6, 7, 8, 9];
arsort($array, SORT_FLAG_CASE);
HTML::pre($array);

$array = [ 10 => 1, 2, 3, 4, 5, 6, 7, 8, 9];
arsort($array, SORT_STRING);
HTML::pre($array);

