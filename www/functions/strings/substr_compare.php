<?php use \Doc\helpers\HTML;
HTML::h1('substr_compare');


HTML::dump(substr_compare('Oh, hello', 'Yes Hello', 3, 4));
HTML::dump(substr_compare('Oh, hello', 'Hello', 4, 3, true));
HTML::dump(substr_compare('Oh, hello', 'Hello', 4, 3));
HTML::dump(substr_compare("abcde", "de", -2, 2));