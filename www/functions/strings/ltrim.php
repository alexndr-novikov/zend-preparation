<?php use \Doc\helpers\HTML;

HTML::h1('ltrim');

$str = " abc ";
HTML::dump(ltrim($str));
$str = "\tabc";
HTML::dump(ltrim($str));
$str = "\nabc";
HTML::dump(ltrim($str));
$str = "\rabc";
HTML::dump(ltrim($str));
$str = "\vabc";
HTML::dump(ltrim($str));
$str = "\0abc";
HTML::dump(ltrim($str));

$string = 'Hello world';
HTML::dump(ltrim($string, 'Hd'));
HTML::dump(ltrim($string, 'Hdleo'));
