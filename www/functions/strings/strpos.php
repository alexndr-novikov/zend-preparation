<?php use \Doc\helpers\HTML;

HTML::h1('strpos');

$str = 'hello Hell hello';
HTML::dump(strpos($str, 'hell'));
HTML::dump(strpos($str, 'hell', 2));
HTML::dump(strpos($str, 'hell', -7));
HTML::dump(strpos($str, 'never', 2));
