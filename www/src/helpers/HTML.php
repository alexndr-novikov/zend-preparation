<?php
namespace Doc\helpers;
class HTML
{
    public static function br()
    {
        echo "<br>";
    }

    public static function tag(string $tagName, string $tagValue)
    {
        echo "<{$tagName}>$tagValue</{$tagName}>";
    }

    public static function h3(string $tagValue)
    {
        static::tag('h3', $tagValue);
    }

    public static function h1(string $tagValue)
    {
        static::tag('h1', $tagValue);
    }
}