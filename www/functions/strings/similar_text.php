<?php use \Doc\helpers\HTML;

HTML::h1('similar_text');
$string1 = 'Lorem ipsum dolor sit amet,
consectetur adipiscing elit,
sed do eiusmod tempor incididunt ut
labore et dolore magna aliqua.

Ut enim ad minim veniam,
quis nostrud exercitation ullamco
laboris nisi ut aliquip
ex ea
commodo
consequat.';

$string2 = 'Ut enim ad minim veniam,
quis nostrud exercitation ullamco
laboris nisi ut aliquip
ex ea
commodo
consequat.';

$percent = 0;
HTML::dump(similar_text($string1, $string1));
HTML::dump(similar_text($string1, $string2));
HTML::br();
HTML::dump(similar_text($string1, $string2, $percent));
HTML::dump($percent);
HTML::br();
HTML::dump(similar_text($string1, $string1, $percent));
HTML::dump($percent);
