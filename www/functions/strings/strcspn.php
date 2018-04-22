<?php use \Doc\helpers\HTML;

HTML::h1('strcspn');


$string = 'Hello world';

HTML::dump(strcspn($string, 'o'));
HTML::dump(substr($string, 0, strcspn($string, 'o')));

HTML::dump(strcspn($string, 'o', 6));
HTML::dump(substr($string, 0, strcspn($string, 'o', 5)));
