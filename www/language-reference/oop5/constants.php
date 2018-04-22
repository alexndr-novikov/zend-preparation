<h1>Class Constants</h1><?php
class ConstantHandler
{
    const ONE = 1;
    const TWO = self::ONE + 1;
    const SOME = '_' . '_';

    public static function echoConst()
    {
        echo static::SOME;
        \Doc\helpers\HTML::br();
    }
}

echo ConstantHandler::ONE;
\Doc\helpers\HTML::br();
$name = 'ConstantHandler';
echo $name::TWO;
\Doc\helpers\HTML::br();
$obj = new ConstantHandler();
$obj::echoConst();
echo $obj::SOME;\Doc\helpers\HTML::br();
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
\Doc\helpers\HTML::br();
ConstVisability::dumpTwo();
\Doc\helpers\HTML::br();
ConstVisability::dumpThree();
\Doc\helpers\HTML::br();
// var_dump(ConstVisability::TWO); // error

var_dump(ConstVisabilityExtended::TWO, ConstVisabilityExtended::THREE);
