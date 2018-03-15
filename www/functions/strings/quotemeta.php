<?php use \Doc\helpers\HTML;
HTML::h1('quotemeta');

$string = '.word\word+word*word?word[word^word]word(word$word)';
HTML::dump(quotemeta($string));
HTML::dump(quotemeta(''));