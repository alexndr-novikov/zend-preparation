<?php use \Doc\helpers\HTML;
HTML::h1('quoted_printable_encode');

$string = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.';
HTML::dump(quoted_printable_encode(''));
HTML::dump(quoted_printable_encode($string));
HTML::dump(quoted_printable_encode($string) === $string);
HTML::dump(quoted_printable_decode(quoted_printable_encode($string)) === $string);