<?php use \Doc\helpers\HTML;

HTML::h1('ucwords');
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


HTML::p(nl2br(ucwords($string)));
HTML::p(nl2br(ucwords($string, implode('', range('a', 'z', 2)))));
