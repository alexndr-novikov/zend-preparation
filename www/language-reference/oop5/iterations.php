<?php use \Doc\helpers\HTML;

HTML::h1('Object Iteration');

class Iteratable
{
    public $one = 1;
    public $two = 2;
    public $three = 3;
    protected $four = 4;
    private $five = 5;

    public function travel()
    {
        foreach ($this as $propName => $propValue) {
            echo "key: {$propName}, value: {$propValue}";
            HTML::br();
        }
    }
}

$obj = new Iteratable();
HTML::tag('p', 'Outside object');
foreach ($obj as $propName => $propValue) {
    echo "key: {$propName}, value: {$propValue}";
    HTML::br();
}
HTML::br();
HTML::tag('p', 'Inside object');
$obj->travel();

class Container implements Iterator
{
    private $items;

    public function __get($name)
    {
        return $this->items[$name] ?? null;
    }

    public function __set($name, $value)
    {
        $this->items[$name] = $value;
    }

    public function __construct(array $array = [])
    {
        $this->items = $array;
        return $this;
    }

    public function next()
    {
        return next($this->items);
    }

    public function rewind()
    {
        reset($this->items);
    }
    public function current()
    {
        return current($this->items);
    }
    public function valid()
    {
        return ((key($this->items) !== false) && (!is_null(key($this->items))));
    }

    public function key()
    {
        return key($this->items);
    }
}

$container = new Container;
$container->a = 'a';
$container->b = 'b';
$container->c = 'c';
$container->d = 'd';
var_dump($container->current());
var_dump($container->key());
$container->next();
var_dump($container->current());
var_dump($container->key());

HTML::br();HTML::br();
foreach ($container as $key => $value) {
    echo "key: {$key}, value: {$value}";
    HTML::br();
}
