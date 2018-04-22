<?php use \Doc\helpers\HTML;

HTML::h1('bin2hex');

$binary = "11111001";
HTML::dump(dechex(bindec($binary)));
