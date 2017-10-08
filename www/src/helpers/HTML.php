<?php

namespace Doc\helpers;

/**
 * Class HTML
 * @package Doc\helpers
 * @method static p($tagValue)
 * @method static h1($tagValue)
 * @method static h2($tagValue)
 * @method static h3($tagValue)
 * @method static h4($tagValue)
 * @method static h5($tagValue)
 * @method static h6($tagValue)
 */
abstract class HTML
{

    const TAG_WHITE_LIST = [
        'a',
        'abbr',
        'acronym',
        'address',
        'applet',
        'area',
        'base',
        'basefont',
        'big',
        'blink',
        'blockquote',
        'body',
        'br',
        'b',
        'button',
        'caption',
        'center',
        'cite',
        'code',
        'col',
        'dfn',
        'dir',
        'div',
        'dl',
        'dt',
        'dd',
        'em',
        'font',
        'form',
        'h1',
        'h2',
        'h3',
        'h4',
        'h5',
        'h6',
        'head',
        'hr',
        'html',
        'img ',
        'input',
        'isindex',
        'i',
        'kbd',
        'link',
        'li',
        'map',
        'marquee',
        'menu',
        'meta',
        'ol',
        'option',
        'param',
        'pre',
        'p',
        'q',
        'samp',
        'script',
        'select',
        'small',
        'span',
        'strikeout',
        'strong',
        'style',
        'sub',
        'sup',
        'table',
        'td',
        'textarea',
        'th',
        'tbody',
        'thead',
        'tfoot',
        'title',
        'tr',
        'tt',
        'ul',
        'u',
        'va>'
    ];

    public static function br()
    {
        echo "<br>";
    }

    public static function a(string $link, string $content)
    {
        echo "<a href='{$link}'>{$content}</a>";
    }

    public static function tag(string $tagName, string $tagValue, $printMode = true)
    {
        self::checkWhiteList($tagName);

        $tag = "<{$tagName}>$tagValue</{$tagName}>";

        if ($printMode) {
            echo $tag;
        }

        return $tag;

    }

    private static function checkWhiteList(string $tag): void
    {
        if (!in_array($tag, self::TAG_WHITE_LIST)) {
            throw new \Exception('Tag is not allowed');
        }
    }

    public static function __callStatic($name, $arguments)
    {
        list($value) = $arguments;

        if(in_array($name, self::TAG_WHITE_LIST)) {
            return self::tag($name, $value);
        }
    }


}