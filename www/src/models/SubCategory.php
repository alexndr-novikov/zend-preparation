<?php

namespace Doc\models;

class SubCategory
{
    /**
     * @var DocPage[]
     */
    private $docPages = [];
    private $directory;
    private $name;

    public function __construct($name, $directory, array $docPages = [])
    {
        $this->name = $name;
        $this->directory = $directory;
        $this->docPages = $docPages;
        return $this;
    }

    public function render($parentDir) : string
    {
        return "<h4>$this->name</h4>"  . $this->renderChildren($parentDir . '/' . $this->directory);
    }

    private function renderChildren($directory)
    {
        $output = '<ul>';
        foreach ($this->docPages as $docPage) {
            $output .= $docPage->render($directory);
        }
        $output .= '</ul>';
        return $output;
    }

}