<?php use \Doc\helpers\HTML;
HTML::h1('opendir()');

$handler = opendir(__DIR__);
HTML::dump($handler);
HTML::p(readdir($handler));
HTML::p(readdir($handler));
HTML::p(readdir($handler));
HTML::p(readdir($handler));
$handler2 = opendir('~'); // warning
