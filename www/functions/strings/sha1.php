<?php use \Doc\helpers\HTML;
HTML::h1('sha1');

$str1 = 1;
$str2 = '1';

HTML::p(sha1($str1));
HTML::dump(sha1($str1, true));
HTML::p(sha1($str2));

HTML::dump('356a192b7913b04c54574d18c28d46e6395428ab' === sha1(1));
HTML::dump(hexdec('356a192b7913b04c54574d18c28d46e6395428ab'));
HTML::dump(number_format(hexdec('356a192b7913b04c54574d18c28d46e6395428ab'), 0));
HTML::dump(hexdec(sha1(1)) > hexdec(md5(1)));