<?php use \Doc\helpers\HTML;

HTML::h1('strripos');


$str = 'hello Hell Hello';
HTML::dump(strripos($str, 'hell'));
HTML::dump(strripos($str, 'hell', 2));
HTML::dump(strpos($str, 'hell', 2));
HTML::dump(strripos($str, 'hell', -7));
HTML::dump(strripos($str, 'never', 2));
