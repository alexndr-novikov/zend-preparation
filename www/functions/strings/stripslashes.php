<?php use \Doc\helpers\HTML;

HTML::h1('stripslashes');

$str = "Who is O\'reilly? \\";

HTML::dump($str);
HTML::dump(stripslashes($str));
