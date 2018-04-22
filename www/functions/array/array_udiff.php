<?php use \Doc\helpers\HTML;

HTML::h1('array_udiff()');

class ValueObject
{
    protected $value;

    public function __construct(int $value)
    {
        $this->value = $value;
    }


    public function getValue(): int
    {
        return $this->value;
    }
}

class HalfValueObject extends ValueObject
{
    public function getValue(): int
    {
        return $this->value / 2;
    }
}

$array1 = [new ValueObject(1), new ValueObject(6), new ValueObject(11)];
$array2 = [new HalfValueObject(2), new HalfValueObject(3), new HalfValueObject(4)];
$array3 = [new ValueObject(5), new ValueObject(6), new ValueObject(7)];

HTML::pre(array_udiff($array1, $array2, $array3, function (ValueObject $val1, ValueObject $val2) {
    return ($val1->getValue() - $val2->getValue());
}));
