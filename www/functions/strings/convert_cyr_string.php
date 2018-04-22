<?php use \Doc\helpers\HTML;

HTML::h1('convert_cyr_string');

$encodes = [
    'k' => 'koi8-r',
    'w' => 'windows-1251',
    'i' => 'iso8859-5',
    'a' => 'x-cp866',
    'd' => 'x-cp866',
    'm' => 'x-mac-cyrillic',
];

$targetString = 'Съешь ещё этих мягких французских булок, да выпей же чаю.';


foreach ($encodes as $enc1 =>  $encode1) {
    foreach ($encodes as $enc2 => $encode2) {
        HTML::dump(convert_cyr_string($targetString, $enc1, $enc2));
    }
}
