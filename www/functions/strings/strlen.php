<?php use \Doc\helpers\HTML;

HTML::h1('strlen');

// 31 symbol
$string = 'السلام علیکم ورحمة الله وبرکاته';
HTML::dump(strlen($string)); // 58 bytes
HTML::dump(mb_strlen($string)); // 11
HTML::br();

$string = 'hello world'; // 11 symbols
HTML::dump(strlen($string)); // 11 bytes

HTML::dump(strlen([]));
