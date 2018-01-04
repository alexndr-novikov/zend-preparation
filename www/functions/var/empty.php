<?php use \Doc\helpers\HTML;
HTML::h1('empty');

HTML::dump(empty($var)); // true
HTML::dump(empty("")); // true
HTML::dump(empty(0)); // true
HTML::dump(empty(0.0)); // true
HTML::dump(empty("0")); // true
HTML::dump(empty(NULL)); // true
HTML::dump(empty(FALSE)); // true
HTML::dump(empty(array())); // true

$arr = [];

HTML::dump(empty($arr[0][1]['qwerty'])); // no warning

$string = ' qwerty';
HTML::dump(empty($string[0]));
HTML::dump(empty($string[1]));