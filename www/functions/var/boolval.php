<?php use \Doc\helpers\HTML;

HTML::h1('boolval');

$variables = [
    '1',
    '0',
    '123456',
    '011',
    'ab',
    'false',
    '',
    [],
    [1, 2],
    new stdClass(),
    0,
    1,
    1.1,
    true,
    false
];

foreach ($variables as $variable) {
    HTML::dump($variable);
    echo '=> ', boolval($variable) ? 'true' : 'false';
    HTML::br();
    HTML::br();
}
