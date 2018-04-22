<?php use \Doc\helpers\HTML;

HTML::h1('strncasecmp');


$str1 = 'hello1';
$str2 = 'Hello2';
$str3 = 'helloo';

HTML::dump(strncasecmp($str1, $str1, 6));
HTML::dump(strncasecmp($str1, $str2, 6));
HTML::dump(strncasecmp($str1, $str2, 5));
HTML::dump(strncasecmp($str1, $str3, 6));
HTML::dump(strncasecmp($str3, $str1, 6));
HTML::dump(strncasecmp($str3, $str3, 6));
