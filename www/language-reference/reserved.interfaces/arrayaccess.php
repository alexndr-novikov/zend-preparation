<?php use \Doc\helpers\HTML;
HTML::h1('ArrayAccess');


class Arrayable implements ArrayAccess
{
    private $innerArray = [];

    public function offsetExists($offset)
    {
        echo 'isset() or exist() triggered';
        HTML::br();
        return array_key_exists($offset, $this->innerArray);
    }

    public function offsetGet($offset)
    {
        echo 'offsetExists() returned TRUE on empty() call';
        HTML::br();
        return isset($this->innerArray[$offset]) ?? null;
    }

    public function offsetSet($offset, $value)
    {
        echo 'offsetSet() is also triggered on empty() call';
        HTML::br();
        if(is_null($offset)) {
            $this->innerArray[] = $value;
        } else {
            $this->innerArray[$offset] = $value;
        }
    }
    public function offsetUnset($offset)
    {
        unset($this->innerArray[$offset]);
    }
}

$obj = new Arrayable();
$obj['new'] = 'foo';
$obj[] = 'new value';
$obj[] = 'new value 2';
empty($obj['new']);
isset($obj['new']);
HTML::tag('pre', print_r($obj, true));