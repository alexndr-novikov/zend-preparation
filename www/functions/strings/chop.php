<?php use \Doc\helpers\HTML;
HTML::h1('chop');


$str = "abc ";
HTML::dump(chop($str));
$str = "abc\t";
HTML::dump(chop($str));
$str = "abc\n";
HTML::dump(chop($str));
$str = "abc\r";
HTML::dump(chop($str));
$str = "abc\0";
HTML::dump(chop($str));
$str = "abc\x0B";
HTML::dump(chop($str));
$str = "\nabc";
HTML::dump(chop($str));

$string = 'Hello world';
HTML::dump(chop($string, 'Hd'));
HTML::dump(chop($string, 'Hdleo'));