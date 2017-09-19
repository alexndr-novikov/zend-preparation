<?php use \Doc\helpers\HTML;
HTML::h1('Overloading');


HTML::h3('Properties');

class Container
{
    private $items = [];

    function __get($name)
    {
        return $this->items[$name] ?? null;
    }

    function __set($name, $value)
    {
        $this->items[$name] = $value;
    }

    function __toString() : string
    {
        return implode(', ', $this->items);
    }

    function __isset($name)
    {
        echo "Looking for {$name} <br>";
        return array_key_exists($name, $this->items);
    }

    function __unset($name)
    {
        echo "Unsetting {$name} <br>";
        unset($this->items[$name]);
    }


}

$container = new Container;

$container->a = 'a';
$container->b = 'b';
$container->c = 'c';

var_dump($container, (string)$container);
HTML::br();

var_dump(isset($container->c));
unset($container->c);

var_dump((string)$container);


var_dump($container->d);


HTML::h3('Functions');

class CallableNoMatterWhat
{
    public static function __callStatic($name, $arguments)
    {
        echo "Called {$name} function statically with arguments " . implode(', ', $arguments) . '<br>';
    }

    function __call($name, $arguments)
    {
        echo "Called {$name} function in object context with arguments " . implode(', ', $arguments) . '<br>';
    }
}

CallableNoMatterWhat::doWhatever(1, 2, 3, 4, 4);
$className = CallableNoMatterWhat;
$className::doWhatever(1, 2, 3, 4, 4);
$obj = new CallableNoMatterWhat();
$obj->doWhatever(1, 2, 3, 4, 4);