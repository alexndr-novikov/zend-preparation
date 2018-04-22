<?php use \Doc\helpers\HTML;

HTML::h1('soundex');

HTML::dump(soundex('see') === soundex('sea'));
HTML::dump(soundex('see') === soundex('seal'));
HTML::dump(soundex('переносица') === soundex('переносится'));
HTML::dump(soundex('банан') === soundex('чемодан'));
HTML::dump(soundex('переносица') === soundex('perenositsya'));
