<?php use \Doc\helpers\HTML;

HTML::h1('print');

print '1';
HTML::br();
HTML::dump(print('2'));
