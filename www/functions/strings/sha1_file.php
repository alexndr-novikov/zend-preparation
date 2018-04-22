<?php use \Doc\helpers\HTML;

HTML::h1('sha1_file');


HTML::dump(sha1_file(__DIR__ . '/sha1.php'));
HTML::dump(sha1_file(__DIR__ . '/sha1.php', true));
HTML::dump(sha1_file(__DIR__ . '/sha1.php') == md5_file(__DIR__ . '/sha1_file.php'));
HTML::dump(sha1_file(__DIR__ . '/sha1.php') == md5_file(__DIR__ . '/sha1.php'));
HTML::dump(sha1_file('https://google.com'));
