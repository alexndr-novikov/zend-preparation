<?php use \Doc\helpers\HTML;

HTML::h1('crc32');

$string = 'السلام علیکم ورحمة الله وبرکاته';
HTML::dump(crc32($string));
$string = 'hello world';
HTML::dump(crc32($string));
