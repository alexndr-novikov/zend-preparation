<?php

namespace Doc\models;

class DocPage
{
    private $name;
    private $fileName;

    public function __construct($name, $fileName)
    {
        $this->name = $name;
        $this->fileName = $fileName;
        return $this;
    }

    public function render($dir): string
    {
        return "<li><a href='{$dir}/{$this->fileName}.php'>{$this->name}</a></li>";
    }

}