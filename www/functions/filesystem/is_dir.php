<?php use \Doc\helpers\HTML;
HTML::h1('is_dir()');

HTML::dump(is_dir(__DIR__));
HTML::dump(is_dir(__DIR__ . '1')); // not existing dir
HTML::dump(is_dir(__DIR__ . DIRECTORY_SEPARATOR . 'basename.php'));
HTML::dump(is_dir('/etc/hosts'));
HTML::dump(is_dir('http://localhost/static'));