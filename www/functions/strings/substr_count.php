<?php use \Doc\helpers\HTML;

HTML::h1('substr_count');

$str = 'This is a test string (is)';
HTML::dump(substr_count($str, 'is'));
HTML::dump(substr_count($str, 'is', 4));
HTML::dump(substr_count($str, 'is', 4, 3));

$str = 'isisiisi';
HTML::dump(substr_count($str, 'isi'));
HTML::dump(substr_count($str, 'Isi'));
