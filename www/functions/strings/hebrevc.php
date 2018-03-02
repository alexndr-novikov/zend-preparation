<?php use \Doc\helpers\HTML;
HTML::h1('hebrevc');


$string = "כל טקסט \nיהיה בסדר';";

HTML::dump(hebrevc($string));
HTML::dump(nl2br(hebrevc($string, 1)));