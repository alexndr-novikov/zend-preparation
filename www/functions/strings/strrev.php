<?php use \Doc\helpers\HTML;
HTML::h1('strrev');

$string = 'Hello world';

HTML::p(strrev($string));
HTML::dump($string === strrev(strrev($string))); // equal
HTML::dump(strrev([]));
HTML::dump(strrev(null));
HTML::dump(strrev(102));