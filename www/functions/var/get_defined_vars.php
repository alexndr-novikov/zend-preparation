<?php use \Doc\helpers\HTML;

HTML::h1('get_defined_vars');

HTML::pre(get_defined_vars());

$a = 1;

HTML::pre(get_defined_vars());
