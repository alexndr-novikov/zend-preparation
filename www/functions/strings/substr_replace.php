<?php use \Doc\helpers\HTML;

HTML::h1('substr_replace');


$var = 'ABCDEFGH:/MNRPQR/';
HTML::p("Original: $var");

/* These two examples replace all of $var with 'bob'. */
HTML::p(substr_replace($var, 'bob', 0));
HTML::p(substr_replace($var, 'bob', 0, strlen($var)));

/* Insert 'bob' right at the beginning of $var. */
HTML::p(substr_replace($var, 'bob', 0, 0));

/* These next two replace 'MNRPQR' in $var with 'bob'. */
HTML::p(substr_replace($var, 'bob', 10, -1));
HTML::p(substr_replace($var, 'bob', -7, -1));

/* Delete 'MNRPQR' from $var. */
HTML::p(substr_replace($var, '', 10, -1));

$input = ['A: XXX', 'B: XXX', 'C: XXX'];

// A simple case: replace XXX in each string with YYY.
HTML::p(implode('; ', substr_replace($input, 'YYY', 3, 3)));

// A more complicated case where each replacement is different.
$replace = ['AAA', 'BBB', 'CCC'];
HTML::p(implode('; ', substr_replace($input, $replace, 3, 3)));

// Replace a different number of characters each time.
$length = [1, 2, 3];
HTML::p(implode('; ', substr_replace($input, $replace, 3, $length)));
