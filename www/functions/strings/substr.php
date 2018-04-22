<?php use \Doc\helpers\HTML;

HTML::h1('substr');

$str = 'abcdefg';

HTML::dump(substr($str, 0, 2));
HTML::dump(substr($str, 0, 700));
HTML::dump(substr($str, 0, -2));
HTML::dump(substr($str, -4, 2));
HTML::dump(substr($str, -4, -1));
HTML::dump(substr($str, 100, -1));
HTML::dump(substr($str, 3));
