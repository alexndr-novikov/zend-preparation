<h1>Anonymous functions</h1><?php

$array = [1, 2, 3];
array_walk($array, function(&$value, $key){
    $value *= 2;
});
var_dump($array);

$htmlLine = function(string $string) {
    echo $string;
    echo '<br>';
};

$htmlLine('hello');
$htmlLine('world');

$arrayHandler = function () use (&$array) {
    array_walk($array, function(&$value, $key){
        $value *= 2;
    });
};

$arrayHandler();
var_dump($array);

$arrayHandler = function () use ($array) {
    array_walk($array, function(&$value, $key){
        $value *= 2;
    });
};
br();
$arrayHandler();
var_dump($array); // no ref - not modified


class This
{
    protected $property;

    public function __construct($property)
    {
        $this->property = $property;
        return $this;
    }


    public function getClosure()
    {
        return function () {
            var_dump($this);
        };
    }
}

$obj = new This(12);
$function = $obj->getClosure();
$function(); // from 5.4

class StaticThis extends This
{
    public function getClosure()
    {
        return static function() {
            var_dump($this);
        };
    }

    public function testInnerClosure()
    {
        $closure = static function () {
            var_dump($this);
        };
        $closure();
    }
}

$obj = new StaticThis(12);
// $obj->testInnerClosure(); // Fatal error: Uncaught Error: Using $this when not in object context
$function = $obj->getClosure();
// $function(); // Fatal error: Uncaught Error: Using $this when not in object context
