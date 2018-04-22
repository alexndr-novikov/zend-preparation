<?php use \Doc\helpers\HTML;

HTML::h1('levenshtein');


$str1 = 'know';
$variants = [
    'knowing',
    'knowledge',
    'hello',
    'knew',
];

foreach ($variants as $variant) {
    HTML::dump(levenshtein($str1, $variant));
}
HTML::br();
HTML::dump(levenshtein('knowledge', 'knowlledge', 50, 1, 1));
HTML::dump(levenshtein('knowledge', 'knowleqge', 1, 35, 1));
HTML::dump(levenshtein('knowledge', 'nowledge', 1, 1, 1000));
