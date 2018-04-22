<?php use \Doc\helpers\HTML;

HTML::h1('hebrev');


$string = 'כל טקסט יהיה בסדר';

HTML::dump(hebrev($string));
HTML::dump(nl2br(hebrev($string, 1)));
