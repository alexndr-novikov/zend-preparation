<?php use \Doc\helpers\HTML;
HTML::h1('strcasecmp');

$str1 = 'hello';
$str2 = 'Hello';
$str3 = 'helloo';

HTML::dump(strcasecmp($str1, $str1));
HTML::dump(strcasecmp($str1, $str2));
HTML::dump(strcasecmp($str1, $str3));
HTML::dump(strcasecmp($str3, $str1));
HTML::dump(strcasecmp($str3, $str3));