<?php use \Doc\helpers\HTML;

HTML::h1('trim');


$str = "abc ";
HTML::dump(trim($str));
$str = "abc\t";
HTML::dump(trim($str));
$str = "abc\n";
HTML::dump(trim($str));
$str = "abc\r";
HTML::dump(trim($str));
$str = "abc\0";
HTML::dump(trim($str));
$str = "abc\x0B";
HTML::dump(trim($str));

$string = 'Hello world';
HTML::dump(trim($string, 'Hd'));
HTML::dump(trim($string, 'Hdle'));
