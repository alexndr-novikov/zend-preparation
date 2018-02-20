<?php use \Doc\helpers\HTML;
HTML::h1('strchr');


$str = '!somemail@example.com~';

HTML::dump(strchr($str, '@'));
HTML::dump(strchr($str, '@', false));
HTML::dump(strchr($str, '@', true));
HTML::dump(strchr($str, '~', true));
HTML::dump(strchr($str, '~'));
HTML::dump(strchr($str, '!', true));
HTML::dump(strchr($str, '!'));