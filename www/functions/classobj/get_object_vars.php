<?php use \Doc\helpers\HTML;

HTML::h1('get_object_vars');



class DefaultClass
{
    public $a = 10;
    const COS = 'cos';
    public $b = 3;
    public $c = 3;
    protected $d = 1;
    private $e;
    public $f;

    public function __construct()
    {
        $this->a = 100;
        $this->f = 100;
    }

    public function getObjectVars()
    {
        HTML::pre(get_object_vars($this));
    }
}

$obj = new DefaultClass();
HTML::pre(get_object_vars($obj));
$obj->getObjectVars();
