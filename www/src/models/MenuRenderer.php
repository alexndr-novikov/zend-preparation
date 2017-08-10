<?php

namespace Doc\models;


class MenuRenderer
{
    /**
     * @var RootCategory[]
     */
    private $rootNodes = [];

    public function __construct(array $menu)
    {
        $this->rootNodes = $menu;
        return $this;
    }

    public function render() : string
    {
        $output = '';
        foreach ($this->rootNodes as $rootRoute) {
            $output .= $rootRoute->render();
        }
        return $output;
    }
}