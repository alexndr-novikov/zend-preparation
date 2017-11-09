<?php use \Doc\helpers\HTML;

HTML::h1('asort()');

$array = [10 => 9, 8, 6, 5, 4, 3, 32, 1];
asort($array); // SORT_REGULAR
HTML::pre($array);

$array = [10 => 9, 8, 6, 5, 4, 3, 32, 1];
asort($array, SORT_NUMERIC);
HTML::pre($array);


$array = [10 => 9, 8, 6, 5, 4, 3, 32, 1];
asort($array, SORT_STRING);
HTML::pre($array);

$array = [10 => 9, 8, 6, 5, 4, 3, 32, 1];
asort($array, SORT_LOCALE_STRING);
HTML::pre($array);

$array = [10 => 9, 8, 6, 5, 4, 3, 32, 1];
asort($array, SORT_NATURAL);
HTML::pre($array);

$array = [10 => 9, 8, 6, 5, 4, 3, 32, 1];
asort($array, SORT_FLAG_CASE);
HTML::pre($array);

$array = [10 => 9, 8, 6, 5, 4, 3, 32, 1];
asort($array, SORT_STRING);
HTML::pre($array);