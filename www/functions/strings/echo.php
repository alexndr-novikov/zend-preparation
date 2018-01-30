<?php use \Doc\helpers\HTML;

HTML::h1('echo');


echo 'One ', 'two';
HTML::br();
?><?= 'One ', 'two' ?><?php
HTML::p('Note the difference:');
echo 'Sum is ', 1 | 2;
HTML::br();
echo 'Sum is ', (1 | 2);
HTML::br();
echo 'Sum is ' . 1 | 2;
HTML::br();