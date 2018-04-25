<?php use \Doc\helpers\HTML;
HTML::h1('chdir()');

HTML::p(getcwd());

chdir('/var');

HTML::p(getcwd());


chdir('/not_existing_generates_warning');