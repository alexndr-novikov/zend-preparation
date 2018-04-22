<?php use \Doc\helpers\HTML;

HTML::h1('str_pad');


$string = 'Cat';
HTML::p(str_pad($string, 10, '-==', STR_PAD_LEFT));
HTML::p(str_pad($string, 10, '-==', STR_PAD_RIGHT));
HTML::p(str_pad($string, 10, '-==', STR_PAD_BOTH));
HTML::dump(str_pad($string, 10));
HTML::p(str_pad($string, 2, '-==', STR_PAD_BOTH));
