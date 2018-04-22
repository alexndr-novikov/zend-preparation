<h1>Anonymous classes</h1><?php

interface Handable
{
    public function handle();
}

trait handlerTrait
{
    public $prop = 'handled';

    public function handle()
    {
        echo $this->prop;
    }
}

class ObjectHandler
{
    private static $object;

    public static function handleInner()
    {
        self::$object->handle();
    }

    public static function setClass(Handable $object)
    {
        self::$object = $object;
    }
}


ObjectHandler::setClass(new class('New handle echo') implements Handable {
    use handlerTrait;

    public function __construct($prop)
    {
        $this->prop = $prop;
    }
});

ObjectHandler::handleInner();

function get_anon_class()
{
    return new class('New handle echo') implements Handable {
        use handlerTrait;

        public function __construct($prop)
        {
            $this->prop = $prop;
        }
    };
}
\Doc\helpers\HTML::br();
var_dump(get_class(get_anon_class()) === get_class(get_anon_class())); // true
\Doc\helpers\HTML::br();
echo get_class(get_anon_class());
\Doc\helpers\HTML::br();
echo get_class(get_anon_class());
