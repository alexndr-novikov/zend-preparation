<?php use \Doc\helpers\HTML;

HTML::h1('strcoll');


$a = 'a';
$b = 'A';

HTML::dump(strcmp($a, $b));

setlocale(LC_COLLATE, 'C');
HTML::dump(strcoll($a, $b));

setlocale(LC_COLLATE, 'de_DE');
HTML::dump(strcoll($a, $b));
