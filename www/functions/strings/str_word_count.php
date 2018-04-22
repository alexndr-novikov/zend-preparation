<?php use \Doc\helpers\HTML;

HTML::h1('str_word_count');

$string = 'Lorem ips3um dolor sit amet, consectetur adipiscing elit, 
sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.';

HTML::dump(str_word_count($string));
HTML::dump(str_word_count($string, 0));
HTML::pre(str_word_count($string, 1));
HTML::pre(str_word_count($string, 2));
HTML::dump(str_word_count($string, 0, '3'));
HTML::pre(str_word_count($string, 1, '3'));
HTML::pre(str_word_count($string, 1, ','));
