<?php use \Doc\helpers\HTML;

HTML::h1('stripos');


$str = 'Hello hello';
HTML::dump(stripos($str, 'hel'));
HTML::dump(stripos($str, 'hel', 2));
HTML::dump(stripos($str, 'now', 2));