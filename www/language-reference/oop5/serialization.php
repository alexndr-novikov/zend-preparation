<h1>Object Serialization</h1><?php

class A
{
    public $a;
    private $b;
    protected $c;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        return $this;
    }
}
$obj = new A('a','b','c');
$serialized = serialize($obj);
var_dump($serialized);
$obj = unserialize($serialized);
var_dump($obj);