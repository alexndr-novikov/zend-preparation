<?php use \Doc\helpers\HTML;

HTML::h1('str_rot13');

$string = implode('', range('a', 'z'));
$string2 = implode('', range('a', 'z')) . implode('', range(0, 9));
HTML::dump($string);
HTML::dump(str_rot13($string));
HTML::dump($string2);
HTML::dump($string2 = str_rot13($string2));
HTML::dump(str_rot13($string2));
