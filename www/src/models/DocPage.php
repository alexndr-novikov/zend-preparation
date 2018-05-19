<?php

namespace Doc\models;

use Doc\helpers\HTML;

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
        if (!file_exists($this->getFilePath())) {
            if (!is_dir($this->directory)) {
                mkdir($this->directory, 0777, true);
            }
            file_put_contents($this->getFilePath(), "<?php use \Doc\helpers\HTML;\r\nHTML::h1('{$this->name}');\r\n");
        }
    }

    public function render($dir): string
    {
        $this->directory = $dir;
        $this->createFile();
        return HTML::li(HTML::a("/{$dir}/{$this->fileName}", $this->name, false), false);
    }
}
