<?php use \Doc\helpers\HTML;
HTML::h1('rtrim');

$str = "abc ";
HTML::dump(rtrim($str));
$str = "abc\t";
HTML::dump(rtrim($str));
$str = "abc\n";
HTML::dump(rtrim($str));
$str = "abc\r";
HTML::dump(rtrim($str));
$str = "abc\0";
HTML::dump(rtrim($str));
$str = "abc\x0B";
HTML::dump(rtrim($str));
$str = "\nabc";
HTML::dump(rtrim($str));

$string = 'Hello world';
HTML::dump(rtrim($string, 'Hd'));
HTML::dump(rtrim($string, 'Hdleo'));