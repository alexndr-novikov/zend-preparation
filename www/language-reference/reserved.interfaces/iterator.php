<?php use \Doc\helpers\HTML;
HTML::h1('Iterator');

class Collection implements Iterator
{
    private $position = 0;

    private $collection = [
        1, 2, 3, 4, 5, 6, 7, 8, 9,
    ];

    public function rewind()
    {
        HTML::tag('p', __METHOD__);
        $this->position = 0;
    }

    public function valid()
    {
        HTML::tag('p', __METHOD__);
        return isset($this->collection[$this->position]);
    }

    public function key()
    {
        HTML::tag('p', __METHOD__);
        return $this->position;
    }
    public function current()
    {
        HTML::tag('p', __METHOD__);
        return $this->collection[$this->position];
    }
    public function next()
    {
        HTML::tag('p', __METHOD__);
        $this->position++;
    }
}

$collection = new Collection();

foreach ($collection as $key => $value) {
    HTML::tag('p', "Key {$key}, value {$value}");
}