<?php use \Doc\helpers\HTML;

HTML::h1('strncmp');

$str1 = 'hello1';
$str2 = 'Hello2';
$str3 = 'helloo';

HTML::dump(strncmp($str1, $str1, 6));
HTML::dump(strncmp($str1, $str2, 6));
HTML::dump(strncmp($str1, $str2, 5));
HTML::dump(strncmp($str1, $str3, 6));
HTML::dump(strncmp($str3, $str1, 6));
HTML::dump(strncmp($str3, $str3, 6));
