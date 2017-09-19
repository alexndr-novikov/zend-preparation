<?php use \Doc\helpers\HTML;
HTML::h1('Magic Methods');

$obj = new MagicClass;
echo serialize($obj);
HTML::br();
var_dump($obj::$state);
HTML::br();
var_dump(unserialize(serialize($obj)));
HTML::br();
var_dump($obj::$state);
HTML::br();
echo $obj;
HTML::br();
$obj();
HTML::br();

$b = MagicClass::__set_state([
    'array' => [9, 8, 7],
    'state' => 'preset',
]);

class MagicClass
{

    public $array = [0, 1, 2, 3, 4, 5];

    public static $state = 'serialised';

    public static function __callStatic($name, $arguments)
    {
        echo "called static method that doesn't exist. Name {$name}() with arguments " . implode(', ', $arguments);
        HTML::br();
    }

    function __sleep()
    {
        echo 'Before serialization triggered';
        HTML::br();
        static::$state = 'serialised';
        return [
            'some_field' => 'some_value',
            0 => 1,
        ];
    }

    function __set($name, $value)
    {
        echo "Tried to set property thad doesn't exist : property {$name} with value '{$value}'";
        HTML::br();
    }

    function __get($name)
    {
        echo "Tried to get property thad doesn't exist : property {$name}";
        HTML::br();
    }

    function __wakeup()
    {
        echo 'Before unserialization triggered';
        static::$state = 'unserialised';
        HTML::br();
    }

    function __invoke()
    {
        echo 'Called an object like a function';
        HTML::br();
    }

    public function __construct()
    {

    }

    function __clone()
    {
        // TODO: Implement __clone() method.
    }

    function __destruct()
    {
        // TODO: Implement __destruct() method.
    }

    function __isset($name)
    {
        // TODO: Implement __isset() method.
    }

    function __debugInfo()
    {
        echo 'var_dump() forbidden, ';
        return [
            'class' => static::class
        ];
    }

    function __unset($name)
    {
        // TODO: Implement __unset() method.
    }

    static function __set_state($an_array)
    {
        $a = new static();
        $a->array = $an_array['array'];
        $a::$state = $an_array['state'];
        return $a;
    }

    function __call($name, $arguments)
    {
        // TODO: Implement __call() method.
    }

    function __toString()
    {
        return implode(' ,', $this->array);
    }
}