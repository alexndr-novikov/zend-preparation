<h1>Scope Resolution Operator (::)</h1><?php

class HasStatic
{
    public const ACCESSABLE = 12;
}

$className = HasStatic::class;

var_dump($className::ACCESSABLE);
\Doc\helpers\HTML::br();
var_dump(HasStatic::ACCESSABLE);
\Doc\helpers\HTML::br();

class ParentClass
{
    public static function someFunc()
    {
        return 'static function';
    }

    public static $prop = 'static property';

    public static function getSelfProp()
    {
        return self::$prop;
    }

    public static function getStaticProp()
    {
        return static::$prop;
    }

    public $parentProp = 1;
    public function __construct()
    {
        $this->parentProp = 10;
    }
}

class ChildClass extends ParentClass
{
    public function __construct()
    {
        parent::__construct();
    }
}

class ChildClassNoParentCall extends ParentClass
{
    public function __construct()
    {
    }
}

$obj1 = new ParentClass;
$obj2 = new ChildClass;
$obj3 = new ChildClassNoParentCall;

var_dump($obj1->parentProp, $obj2->parentProp, $obj3->parentProp);
\Doc\helpers\HTML::br();

var_dump(
    ParentClass::someFunc(),
    ParentClass::$prop,
    ParentClass::getSelfProp(),
    ParentClass::getStaticProp()
);
