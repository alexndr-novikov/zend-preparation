<?php use \Doc\helpers\HTML;
HTML::h1('scandir()');


HTML::pre(scandir(__DIR__, SCANDIR_SORT_DESCENDING));
HTML::br();
HTML::br();
HTML::pre(scandir(__DIR__, SCANDIR_SORT_ASCENDING));
HTML::pre(scandir('/', SCANDIR_SORT_ASCENDING));
HTML::dump(scandir('-/', SCANDIR_SORT_ASCENDING));