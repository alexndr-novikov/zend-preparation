<h1>Object Interfaces</h1><?php

interface Packable
{
    public function pack(string $pathWhere);

    public function sameMethod($param);
}

interface PackableExtended extends Packable
{
    const BOX_EXTENDED_CLASS = __CLASS__;

    public function pack(string $pathWhere = '');
}

class Destination
{
    private $point;

    public function __construct(float $latitude, float $longitude)
    {
        $this->point = new class($latitude, $longitude)
        {

            protected $latitude;
            protected $longitude;

            public function __construct($latitude, $longitude)
            {
                $this->latitude = $latitude;
                $this->longitude = $longitude;
                return $this;
            }
        };
        return $this;
    }
}

interface Sendable
{
    public function deliverTo(Destination $destination);

    public function sameMethod($param);
}

class Box implements PackableExtended, Sendable
{
    public function pack(string $pathWhere = '')
    {
        var_dump($pathWhere);
        br();
    }

    public function deliverTo(Destination $destination)
    {
        var_dump($destination);
        br();
    }

    public function sameMethod($param = '')
    {
        echo 'No conflict since PHP 5.3.9';
        br();
    }
}

$box = new Box();

$box->deliverTo(new Destination(11.112, 23.211));
$box->pack('/var/www/box.box');
$box->sameMethod();
var_dump(Box::BOX_EXTENDED_CLASS);
