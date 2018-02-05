<?php use \Doc\helpers\HTML;
HTML::h1('strpbrk');



$string = 'hello world';
HTML::dump(strpbrk($string, 'Lo'));
HTML::dump(strpbrk($string, 'LO'));
$string = 'Lorem ipsum dolor sit amet,
consectetur adipiscing elit,
sed do eiusmod tempor incididunt ut
labore et dolore magna aliqua.

Ut enim ad minim veniam,
quis nostrud exercitation ullamco
laboris nisi ut aliquip
ex ea
commodo
consequat.';

HTML::dump(strpbrk($string, 'e'));
HTML::dump(strpbrk($string, ' '));
HTML::dump(strpbrk($string, "\r"));