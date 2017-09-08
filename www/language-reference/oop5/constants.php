<h1>Class Constants</h1><?php
class ConstantHandler
{
    const ONE = 1;
    const TWO = self::ONE + 1;
    const SOME = '_' . '_';

    static function echoConst()
    {
        echo static::SOME;br();
    }
}

echo ConstantHandler::ONE;
br();
$name = 'ConstantHandler';
echo $name::TWO;
br();
$obj = new ConstantHandler();
$obj::echoConst();
echo $obj::SOME;br();
echo SOME::class;


class ConstVisability
{
    public const ONE = 1;
    protected const TWO = 2;
    private const THREE = 3;

    public static function dumpTwo()
    {
        var_dump(static::TWO);
    }

    public static function dumpThree()
    {
        var_dump(static::THREE);
    }
}

class ConstVisabilityExtended extends ConstVisability
{
    public const TWO = 3;
    public const THREE = 4;
}

var_dump(ConstVisability::ONE);
br();
ConstVisability::dumpTwo();
br();
ConstVisability::dumpThree();
br();
// var_dump(ConstVisability::TWO); // error

var_dump(ConstVisabilityExtended::TWO, ConstVisabilityExtended::THREE);