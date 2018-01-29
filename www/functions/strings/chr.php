<?php use \Doc\helpers\HTML;

HTML::h1('chr');

for ($i = 0; $i < 500; $i++) {
    HTML::dump(chr($i));
}