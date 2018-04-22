<?php use \Doc\helpers\HTML;

HTML::h1('$GLOBALS');

HTML::tag('pre', print_r($GLOBALS, true));
