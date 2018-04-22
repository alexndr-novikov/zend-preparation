<?php use \Doc\helpers\HTML;

HTML::h1('$_​REQUEST');


HTML::a('?var=foo&a', 'Add get params');
HTML::br();

HTML::pre($_REQUEST);

HTML::br();

var_dump($_REQUEST === array_merge($_GET, $_POST, $_COOKIE));
