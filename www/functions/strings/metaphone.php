<?php use \Doc\helpers\HTML;

HTML::h1('metaphone');

$pairs = [
    'sea' => 'see',
    'see' => 'seal',
    'переносица' => 'переносится', // works for eng only :C
    'банан' => 'чемодан',
    'perenositsya' => 'переносица',
    'mainstream' => 'man stream',
];

foreach ($pairs as $pair1 => $pair2) {
    HTML::dump(metaphone($pair1));
    HTML::dump(metaphone($pair2));
    HTML::dump(metaphone($pair1) === metaphone($pair2));
    HTML::dump(soundex($pair1) === soundex($pair2));
    HTML::br();
}

HTML::dump(metaphone('see', 1) === metaphone('seal', 1));
HTML::dump(metaphone('see') === metaphone('seal'));
