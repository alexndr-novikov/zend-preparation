<?php use \Doc\helpers\HTML;
HTML::h1('md5_file');


HTML::dump(md5_file(__DIR__ . '/md5.php'));
HTML::dump(md5_file(__DIR__ . '/md5.php', true));
HTML::dump(md5_file(__DIR__ . '/md5.php') == md5_file(__DIR__ . '/md5_file.php'));
HTML::dump(md5_file(__DIR__ . '/md5.php') == md5_file(__DIR__ . '/md5.php'));
HTML::dump(md5_file('https://google.com'));
