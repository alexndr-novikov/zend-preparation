<?php use \Doc\helpers\HTML;
HTML::h1('range()');


HTML::pre(range(0, 6));
HTML::pre(range(3, 0));
HTML::pre(range(0, 6, 2));
HTML::pre(range(6, 0, 2));
HTML::pre(range('a', 'd'));
HTML::pre(range('d', 'a'));
HTML::pre(range('g', 'a', 2));
HTML::pre(range(9, 'q'));
HTML::pre(range('9 ', 'q'));
HTML::pre(range(' ', 'q'));
HTML::pre(range('00', '22'));
