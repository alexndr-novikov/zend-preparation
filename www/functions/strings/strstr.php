<?php use \Doc\helpers\HTML;
HTML::h1('strstr');

$str = '!somemail@example.com~';

HTML::dump(strstr($str, '@'));
HTML::dump(strstr($str, '@', false));
HTML::dump(strstr($str, '@', true));
HTML::dump(strstr($str, '~', true));
HTML::dump(strstr($str, '~'));
HTML::dump(strstr($str, '!', true));
HTML::dump(strstr($str, '!'));
