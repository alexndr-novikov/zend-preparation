<?php use \Doc\helpers\HTML;
HTML::h1('md5');


$str1 = 1;
$str2 = '1';

HTML::p(md5($str1));
HTML::dump(md5($str1, true));
HTML::p(md5($str2));

HTML::dump('c4ca4238a0b923820dcc509a6f75849b' === md5(1));
HTML::dump(hexdec('c4ca4238a0b923820dcc509a6f75849b'));
HTML::dump(number_format(hexdec('c4ca4238a0b923820dcc509a6f75849b'), 0));