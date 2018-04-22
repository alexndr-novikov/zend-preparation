<?php

use Doc\helpers\HTML;

function checkType(string $functionName)
{
    if (!is_callable($functionName)) {
        throw new \Exception('Error type check function');
    }

    $resource = curl_init();

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
        false,
        function () {
            return 1;
        },
        $function = function () : iterable {
            yield from range(1, 10, 2);
        },
        $function(),
        null,
        $resource,
    ];

    foreach ($variables as $variable) {
        if ($functionName($variable)) {
            echo '<strong>';
        }
        var_dump($variable);
        echo '=> ', $functionName($variable) ? 'true' : 'false';
        if ($functionName($variable)) {
            echo '</strong>';
        }
        HTML::br();
        HTML::br();
    }
}
