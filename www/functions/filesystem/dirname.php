<?php use \Doc\helpers\HTML;
HTML::h1('dirname()');


HTML::p(dirname(__DIR__));
HTML::p(dirname(__DIR__, 1));
HTML::p(dirname(__DIR__, 2));

$dir = __DIR__ . '../directories';
HTML::p(dirname($dir));

HTML::p(dirname("/etc/passwd"));
HTML::p(dirname("/etc/"));
HTML::p(dirname("."));
HTML::p(dirname("C:\\"));
HTML::p(dirname("/usr/local/lib", 2));