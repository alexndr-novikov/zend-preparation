<?php use \Doc\helpers\HTML;

HTML::h1('number_format');

$num = 1234.567;
$num2 = 12341234.567;

HTML::dump(number_format($num));
HTML::dump(number_format($num, 0));
HTML::dump(number_format($num, 2));
HTML::dump(number_format($num, 3));
HTML::dump(number_format($num, 3, '~')); // warning
HTML::dump(number_format($num, 3, '~', ','));
HTML::dump(number_format($num2, 3, '~', ' '));
