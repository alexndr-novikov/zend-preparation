<?php use \Doc\helpers\HTML;
HTML::h1('$php_​errormsg');

HTML::p(HTML::i('Deprecated starting from PHP 7.2.0', false));
ini_set('track_errors', 1);
@strpos();
echo $php_errormsg;