<?php use \Doc\helpers\HTML;

HTML::h1('$_​GET');


HTML::a('?var=foo&a', 'Add get params');
HTML::br();

HTML::tag('pre', print_r($_GET, true));
