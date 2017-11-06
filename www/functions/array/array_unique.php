<?php use \Doc\helpers\HTML;

HTML::h1('array_​unique()');

HTML::p('Sorting flag SORT_REGULAR: ' . SORT_REGULAR);
HTML::p('Sorting flag SORT_NUMERIC: ' . SORT_NUMERIC);
HTML::p('Sorting flag SORT_STRING: ' . SORT_STRING);
HTML::p('Sorting flag SORT_LOCALE_STRING: ' . SORT_LOCALE_STRING);

$array = [1, 2, 2, 3, 4, 3, 3, 2, '1', 7];

HTML::pre(array_unique($array, SORT_STRING)); // SORT_STRING is default
HTML::pre(array_unique($array, SORT_REGULAR));
HTML::pre(array_unique([true, 1], SORT_NUMERIC));
HTML::pre(array_unique([true, 1], SORT_LOCALE_STRING));
HTML::pre(array_unique($array, SORT_LOCALE_STRING));