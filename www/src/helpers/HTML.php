<?php

namespace Doc\helpers;

/**
 * Class HTML
 * @package Doc\helpers
 *
 * @method static abbr($tagValue, $printMode = true)
 * @method static acronym($tagValue, $printMode = true)
 * @method static address($tagValue, $printMode = true)
 * @method static applet($tagValue, $printMode = true)
 * @method static area($tagValue, $printMode = true)
 * @method static base($tagValue, $printMode = true)
 * @method static basefont($tagValue, $printMode = true)
 * @method static big($tagValue, $printMode = true)
 * @method static blink($tagValue, $printMode = true)
 * @method static blockquote($tagValue, $printMode = true)
 * @method static body($tagValue, $printMode = true)
 * @method static b($tagValue, $printMode = true)
 * @method static button($tagValue, $printMode = true)
 * @method static caption($tagValue, $printMode = true)
 * @method static center($tagValue, $printMode = true)
 * @method static cite($tagValue, $printMode = true)
 * @method static code($tagValue, $printMode = true)
 * @method static col($tagValue, $printMode = true)
 * @method static dfn($tagValue, $printMode = true)
 * @method static dir($tagValue, $printMode = true)
 * @method static div($tagValue, $printMode = true)
 * @method static dl($tagValue, $printMode = true)
 * @method static dt($tagValue, $printMode = true)
 * @method static dd($tagValue, $printMode = true)
 * @method static em($tagValue, $printMode = true)
 * @method static font($tagValue, $printMode = true)
 * @method static form($tagValue, $printMode = true)
 * @method static h1($tagValue, $printMode = true)
 * @method static h2($tagValue, $printMode = true)
 * @method static h3($tagValue, $printMode = true)
 * @method static h4($tagValue, $printMode = true)
 * @method static h5($tagValue, $printMode = true)
 * @method static h6($tagValue, $printMode = true)
 * @method static head($tagValue, $printMode = true)
 * @method static hr($tagValue, $printMode = true)
 * @method static html($tagValue, $printMode = true)
 * @method static isindex($tagValue, $printMode = true)
 * @method static i($tagValue, $printMode = true)
 * @method static kbd($tagValue, $printMode = true)
 * @method static link($tagValue, $printMode = true)
 * @method static li($tagValue, $printMode = true)
 * @method static map($tagValue, $printMode = true)
 * @method static marquee($tagValue, $printMode = true)
 * @method static menu($tagValue, $printMode = true)
 * @method static meta($tagValue, $printMode = true)
 * @method static ol($tagValue, $printMode = true)
 * @method static option($tagValue, $printMode = true)
 * @method static param($tagValue, $printMode = true)
 * @method static p($tagValue, $printMode = true)
 * @method static q($tagValue, $printMode = true)
 * @method static samp($tagValue, $printMode = true)
 * @method static script($tagValue, $printMode = true)
 * @method static select($tagValue, $printMode = true)
 * @method static small($tagValue, $printMode = true)
 * @method static span($tagValue, $printMode = true)
 * @method static strikeout($tagValue, $printMode = true)
 * @method static strong($tagValue, $printMode = true)
 * @method static style($tagValue, $printMode = true)
 * @method static sub($tagValue, $printMode = true)
 * @method static sup($tagValue, $printMode = true)
 * @method static table($tagValue, $printMode = true)
 * @method static td($tagValue, $printMode = true)
 * @method static textarea($tagValue, $printMode = true)
 * @method static th($tagValue, $printMode = true)
 * @method static tbody($tagValue, $printMode = true)
 * @method static thead($tagValue, $printMode = true)
 * @method static tfoot($tagValue, $printMode = true)
 * @method static title($tagValue, $printMode = true)
 * @method static tr($tagValue, $printMode = true)
 * @method static tt($tagValue, $printMode = true)
 * @method static ul($tagValue, $printMode = true)
 * @method static u($tagValue, $printMode = true)
 * @method static va($tagValue, $printMode = true)
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
        'va'
    ];

    /**
     * Print/return <br> tag.
     * @param bool $printMode
     * @return mixed
     */
    public static function br($printMode = true)
    {
        return self::handlePrint('<br>', $printMode);
    }

    /**
     * Print/return <a></a> tag.
     * @param string $link
     * @param string $content
     * @param bool $printMode
     * @return mixed
     */
    public static function a(string $link, string $content, $printMode = true)
    {
        return self::handlePrint("<a href='{$link}'>{$content}</a>", $printMode);
    }

    /**
     * Print/return pair tag.
     * @param string $tagName
     * @param string $tagValue
     * @param bool $printMode
     * @return mixed
     */
    public static function tag(string $tagName, string $tagValue, $printMode = true)
    {
        self::checkWhiteList($tagName);

        $tag = "<{$tagName}>$tagValue</{$tagName}>";

        return self::handlePrint($tag, $printMode);

    }

    /**
     * Check if tag is pair and is white list
     * @param string $tag
     * @throws \Exception
     */
    private static function checkWhiteList(string $tag): void
    {
        if (!in_array($tag, self::TAG_WHITE_LIST)) {
            throw new \Exception('Tag is not allowed');
        }
    }

    /**
     * Let call any pair html tag
     * @param $name
     * @param $arguments
     * @return mixed
     */
    public static function __callStatic($name, $arguments)
    {
        list($value, $printMode) = $arguments;
        $printMode = is_null($printMode) ? true : (bool)$printMode;
        return self::tag($name, $value, (bool)$printMode);
    }

    /**
     * Return and print tag if necessary
     * @param $value
     * @param $printMode
     * @return mixed
     */
    private static function handlePrint($value, $printMode)
    {
        if ($printMode) {
            echo $value;
        }

        return $value;
    }

    public static function pre(array $tagValue, $printMode = true)
    {
        return self::tag('pre', print_r($tagValue, true), $printMode);
    }


}