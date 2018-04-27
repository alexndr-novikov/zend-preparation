<?php use \Doc\helpers\HTML;
HTML::h1('getcwd()');

HTML::p(getcwd());
chdir('/');
HTML::p(getcwd());
