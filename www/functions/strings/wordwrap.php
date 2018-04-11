<?php use \Doc\helpers\HTML;

HTML::h1('wordwrap');

$string = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aspernatur facilis omnis quas quidem, repellendus.';

print nl2br(wordwrap($string, 20));

HTML::br();
HTML::br();
// equals, but delimiter is different
print(wordwrap($string, 20, '<br>'));
HTML::br();HTML::br();
// cuts long words
print(wordwrap($string, 10, '<br>', true));
