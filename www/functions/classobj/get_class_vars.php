<?php use \Doc\helpers\HTML;

HTML::h1('get_class_vars');


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

    public function getClassVars()
    {
        HTML::pre(get_class_vars(get_class($this)));
    }
}

$obj = new DefaultClass();
HTML::pre(get_class_vars(get_class($obj)));
$obj->getClassVars();
