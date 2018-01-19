<?php use \Doc\helpers\HTML;
HTML::h1('str_repeat');

HTML::p(str_repeat('meow ', 3));
HTML::p(str_repeat('meow ', 0));
HTML::dump(str_repeat('meow ', -10));
HTML::dump(str_repeat('meow ', new stdClass()));