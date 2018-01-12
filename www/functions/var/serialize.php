<?php

use \Doc\helpers\HTML;

HTML::h1('serialize');

$resource = curl_init();

class ToSerialize
{
    public $a;
    private $b;
    protected $c;

    public function __sleep()
    {
        HTML::p(self::class . ' serialization triggered');
        return [
            'a',
            'b',
            'c'
        ];
    }

    public function __wakeup()
    {
        HTML::p(self::class . ' unserialization triggered');
    }


}

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
    new \stdClass(),
    0,
    1,
    1.1,
    true,
    false,
    function () {
        return 1;
    },
    $function = function (): iterable {
        yield from range(1, 10, 2);
    },
    $function(),
    null,
    $resource,
    new ToSerialize(),
];

foreach ($variables as $variable) {
    if (is_object($variable) && !($variable instanceof \Serializable || $variable instanceof \ToSerialize)) {
        HTML::p(HTML::strong('Can not serialize this:', false));
        HTML::dump($variable);
        HTML::br();
        HTML::br();
    } else {
        HTML::dump($variable);
        HTML::dump(serialize($variable));
        HTML::p('================');
    }
}