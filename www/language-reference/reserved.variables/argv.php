<?php use \Doc\helpers\HTML;
HTML::h1('$argv');

HTML::p('Call related file in console in the project root');
HTML::p('docker exec -it php-zend-exam bash');
HTML::p('php language-reference/reserved.variables/__argv.php 1 2 3 4 5 9');