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
        $this->id = md5($this->name);
        return $this;
    }

    public function render($parentDir) : string
    {

        return "<h4 class='collapse-control' data-toggle='collapse' data-target='#{$this->id}' aria-expanded='false' aria-controls='collapseExample'>$this->name</h4>"  . $this->renderChildren($parentDir . '/' . $this->directory);
    }

    private function renderChildren($directory)
    {
        $output = "<ul id='{$this->id}' class='collapse'>";
        foreach ($this->docPages as $docPage) {
            $output .= $docPage->render($directory);
        }
        $output .= '</ul>';
        return $output;
    }

}