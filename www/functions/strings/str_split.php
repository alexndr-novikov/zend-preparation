<?php use \Doc\helpers\HTML;
HTML::h1('str_split');

$str = 'helloo';

HTML::pre(str_split($str));
HTML::pre(str_split($str, 2));
HTML::pre(str_split($str, 10));
HTML::pre(str_split($str, 10));
HTML::dump(str_split($str, 0));