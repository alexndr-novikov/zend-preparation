<?php use \Doc\helpers\HTML;
HTML::h1('strspn');

$str = '42 is the best 1234 answer';
HTML::dump(strspn($str, '12345'));
HTML::dump(strspn($str, '12345', 1));
HTML::dump(strspn($str, '12345', -strlen($str), 1));
HTML::dump(strspn($str, '12345', 15, -8));