<?php use \Doc\helpers\HTML;
HTML::h1('nl2br');

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

HTML::p(nl2br($string));
HTML::p(nl2br($string, true));