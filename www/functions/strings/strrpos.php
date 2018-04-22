<?php use \Doc\helpers\HTML;

HTML::h1('strrpos');


$str = 'hello Hell Hello';
HTML::dump(strrpos($str, 'hell'));
HTML::dump(strrpos($str, 'hell', 2));
HTML::dump(strripos($str, 'hell', 2));
HTML::dump(strrpos($str, 'hell', -7));
HTML::dump(strrpos($str, 'never', 2));
