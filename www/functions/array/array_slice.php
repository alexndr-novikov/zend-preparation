<?php use \Doc\helpers\HTML;

HTML::h1('array_slice()');

$array = [10 => 0, 1, 'string_key' => true, 3, 4, 'string too' => 5, '1'];

HTML::p('HTML::pre(array_slice($array, 1, 2));');
HTML::pre(array_slice($array, 1, 2));
HTML::p('HTML::pre(array_slice($array, 0, 2, true));');
HTML::pre(array_slice($array, 0, 2, true));
HTML::p('HTML::pre(array_slice($array, 2, 2, true));');
HTML::pre(array_slice($array, 2, 2, true));
HTML::p('');

HTML::p('HTML::pre(array_slice($array, -2, 2));');
HTML::pre(array_slice($array, -2, 2));
HTML::p('HTML::pre(array_slice($array, -2, 2, true));');
HTML::pre(array_slice($array, -2, 2, true));
HTML::p('HTML::pre(array_slice($array, -2, 200));');
HTML::pre(array_slice($array, -2, 200));
HTML::p('');

HTML::p('');

HTML::p('HTML::pre(array_slice($array, -2, 2));');
HTML::pre(array_slice($array, -2, 2));
HTML::p('HTML::pre(array_slice($array, -2));');
HTML::pre(array_slice($array, -2));
HTML::p('HTML::pre(array_slice($array, 1, -4));');
HTML::pre(array_slice($array, 1, -4));
