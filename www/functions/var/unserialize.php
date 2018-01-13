<?php use \Doc\helpers\HTML;

HTML::h1('unserialize');


class ToSerializeForbidden
{
    public function __sleep()
    {
        return [];
    }

    public function __wakeup()
    {
    }


}

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
    's:1:"1";',
    's:6:"123456";',
    'a:2:{i:0;i:1;i:1;i:2;}',
    'd:1.1;',
    'N;',
    serialize(new ToSerialize()),
    serialize(new ToSerializeForbidden),
];

foreach ($variables as $variable) {
    HTML::dump(unserialize($variable, [
        'allowed_classes' => [ToSerialize::class]
    ]));
}