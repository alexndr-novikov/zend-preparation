<?php use \Doc\helpers\HTML;

use Faker\Factory;

HTML::h1('strtr');

/**
 * Apply Caesar cipher to string
 * @param $original
 * @return string
 */
function encryptText($original)
{
    return strtr($original, getCaesarCipherMap());
}

/**
 * Alt syntax, same functionality
 * @param $original
 * @return string
 */
function encryptTextDummyWay($original)
{
    foreach (getCaesarCipherMap() as $from => $to) {
        $original = strtr($original, $from, $to);
    }
    return $original;
}

/**
 * @return array
 */
function getCaesarCipherMap()
{
    $alphabet = range('a', 'z');
    $offset = rand(1, count($alphabet) - 1);

    $alphabetAfterOffsetGenerator = function ($alphabet, $offset) {
        $offsetPart = array_splice($alphabet, 0, $offset);
        return array_merge($alphabet , $offsetPart);
    };
    $newAlphabet = $alphabetAfterOffsetGenerator($alphabet, $offset);


    return array_combine($alphabet, $newAlphabet);
}



$factory = Factory::create();
$text = strtolower($factory->text());
HTML::dump($text);
HTML::dump(encryptText($text));
HTML::dump(encryptTextDummyWay($text));