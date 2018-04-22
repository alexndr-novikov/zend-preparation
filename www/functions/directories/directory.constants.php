<?php use \Doc\helpers\HTML;

HTML::h1('Directory constants');

HTML::h4('DIRECTORY_SEPARATOR:');
HTML::dump(DIRECTORY_SEPARATOR);
HTML::h4('PATH_SEPARATOR:');
HTML::dump(PATH_SEPARATOR);
HTML::h4('SCANDIR_SORT_ASCENDING:');
HTML::dump(SCANDIR_SORT_ASCENDING);
HTML::h4('SCANDIR_SORT_DESCENDING:');
HTML::dump(SCANDIR_SORT_DESCENDING);
HTML::h4('SCANDIR_SORT_NONE:');
HTML::dump(SCANDIR_SORT_NONE);
