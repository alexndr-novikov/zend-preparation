<?php use \Doc\helpers\HTML;

HTML::h1('str_ireplace');


$str1 = 'abA';
$array = [$str1, 'bABaba', 'qwerty'];
$count = 0;
HTML::dump(str_ireplace('a', '~', $str1, $count));
HTML::p("$count replaces");
HTML::br();
HTML::dump(str_ireplace(['a', 'R', 'T'], '~', $str1, $count));
HTML::p("$count replaces");
HTML::br();
HTML::dump(str_ireplace(['a', 'R', 'T'], ['~'], $str1, $count));
HTML::p("$count replaces");
HTML::br();
HTML::dump(str_ireplace(['a', 'R', 'T'], ['~', '-', '='], $str1, $count));
HTML::p("$count replaces");
HTML::br();


HTML::dump(str_ireplace('a', '~', $array, $count));
HTML::p("$count replaces");
HTML::br();
HTML::dump(str_ireplace(['a', 'R', 'T'], '~', $array, $count));
HTML::p("$count replaces");
HTML::br();
HTML::dump(str_ireplace(['a', 'R', 'T'], ['~'], $array, $count));
HTML::p("$count replaces");
HTML::br();
HTML::dump(str_ireplace(['a', 'R', 'T'], ['~', '-', '='], $array, $count));
HTML::p("$count replaces");
HTML::br();