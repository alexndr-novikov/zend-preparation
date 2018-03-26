<?php use \Doc\helpers\HTML;
HTML::h1('strnatcasecmp');

HTML::dump(strnatcasecmp('abc', 'Abc'));
HTML::dump(strnatcasecmp('abc', 'bbc'));
HTML::dump(strnatcasecmp('bbc', 'abc'));
HTML::dump(strnatcasecmp('bbc', 'bbc'));
HTML::dump(strnatcasecmp('0bbc', 'bbc'));
HTML::dump(strnatcasecmp('0bbc', '1bbc'));
HTML::dump(strnatcasecmp('1bbc', '0bbc'));