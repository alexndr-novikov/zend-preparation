<?php use \Doc\helpers\HTML;
HTML::h1('str_replace');


$str1 = 'abA';
$array = [$str1, 'bABaba', 'qwerty'];
$count = 0;
HTML::dump(str_replace('a', '~', $str1, $count));
HTML::p("$count replaces");
HTML::br();
HTML::dump(str_replace(['a', 'R', 'T'], '~', $str1, $count));
HTML::p("$count replaces");
HTML::br();
HTML::dump(str_replace(['a', 'R', 'T'], ['~'], $str1, $count));
HTML::p("$count replaces");
HTML::br();
HTML::dump(str_replace(['a', 'R', 'T'], ['~', '-', '='], $str1, $count));
HTML::p("$count replaces");
HTML::br();


HTML::dump(str_replace('a', '~', $array, $count));
HTML::p("$count replaces");
HTML::br();
HTML::dump(str_replace(['a', 'R', 'T'], '~', $array, $count));
HTML::p("$count replaces");
HTML::br();
HTML::dump(str_replace(['a', 'R', 'T'], ['~'], $array, $count));
HTML::p("$count replaces");
HTML::br();
HTML::dump(str_replace(['a', 'R', 'T'], ['~', '-', '='], $array, $count));
HTML::p("$count replaces");
HTML::br();