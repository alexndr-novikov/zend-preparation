<?php use \Doc\helpers\HTML;
HTML::h1('strcmp');

$str1 = 'hello';
$str2 = 'Hello';
$str3 = 'helloo';

HTML::dump(strcmp($str1, $str1));
HTML::dump(strcmp($str1, $str3));
HTML::dump(strcmp($str3, $str1));
HTML::dump(strcmp($str3, $str3));