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

    public function __sleep()
    {
        echo 'Before serialization triggered';
        HTML::br();
        static::$state = 'serialised';
        return [
            'some_field' => 'some_value',
            0 => 1,
        ];
    }

    public function __set($name, $value)
    {
        echo "Tried to set property thad doesn't exist : property {$name} with value '{$value}'";
        HTML::br();
    }

    public function __get($name)
    {
        echo "Tried to get property thad doesn't exist : property {$name}";
        HTML::br();
    }

    public function __wakeup()
    {
        echo 'Before unserialization triggered';
        static::$state = 'unserialised';
        HTML::br();
    }

    public function __invoke()
    {
        echo 'Called an object like a function';
        HTML::br();
    }

    public function __construct()
    {
    }

    public function __clone()
    {
        // TODO: Implement __clone() method.
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
    }

    public function __isset($name)
    {
        // TODO: Implement __isset() method.
    }

    public function __debugInfo()
    {
        echo 'var_dump() forbidden, ';
        return [
            'class' => static::class
        ];
    }

    public function __unset($name)
    {
        // TODO: Implement __unset() method.
    }

    public static function __set_state($an_array)
    {
        $a = new static();
        $a->array = $an_array['array'];
        $a::$state = $an_array['state'];
        return $a;
    }

    public function __call($name, $arguments)
    {
        // TODO: Implement __call() method.
    }

    public function __toString()
    {
        return implode(' ,', $this->array);
    }
}
