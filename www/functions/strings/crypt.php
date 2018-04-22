<?php use \Doc\helpers\HTML;

HTML::h1('crypt');

$string = 'Lorem ipsum dolor sit amet';
$salt = 'pepper';
HTML::dump(crypt($string));
HTML::br();
HTML::br();


if (CRYPT_STD_DES === 1) {
    HTML::p('Standard DES: ' . crypt($string, 'rl'));
}

if (CRYPT_EXT_DES === 1) {
    HTML::p('Extended DES: ' . crypt($string, '_J9..rasm'));
}

if (CRYPT_MD5 === 1) {
    HTML::p('MD5:          ' . crypt($string, '$1$rasmusle$'));
}

if (CRYPT_BLOWFISH === 1) {
    HTML::p('Blowfish:     ' . crypt($string, '$2a$07$usesomesillystringforsalt$'));
}

if (CRYPT_SHA256 === 1) {
    HTML::p('SHA-256:      ' . crypt($string, '$5$rounds=5000$usesomesillystringforsalt$'));
}

if (CRYPT_SHA512 === 1) {
    HTML::h3('SHA-512:');
    $start = microtime(true);
    HTML::p(crypt($string, '$6$rounds=5000$usesomesillystringforsalt$'));
    $point = microtime(true);
    HTML::p('Time to hash 5000 rounds: ' . ($point  - $start));
    HTML::p(crypt($string, '$6$rounds=2200000$usesomesillystringforsalt$'));
    HTML::p('Time to hash 2 200 000 rounds: ' . (microtime(true) - $point));
}
