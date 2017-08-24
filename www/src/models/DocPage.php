<?php

namespace Doc\models;

class DocPage
{
    private $name;
    private $fileName;

    private $directory;

    public function __construct($name, $fileName)
    {
        $this->name = $name;
        $this->fileName = $fileName;
        return $this;
    }

    private function getFilePath() : string
    {
        return dirname(__DIR__, 2) . "/{$this->directory}/{$this->fileName}.php";
    }

    private function createFile()
    {
        if(!file_exists($this->getFilePath())) {
            file_put_contents($this->getFilePath(), "<h1>{$this->name}</h1><?php\r\n");
        }
    }

    public function render($dir): string
    {
        $this->directory = $dir;
        $this->createFile();
        return "<li><a href='{$dir}/{$this->fileName}.php'>{$this->name}</a></li>";
    }

}