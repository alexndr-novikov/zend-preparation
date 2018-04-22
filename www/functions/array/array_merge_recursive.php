<?php use \Doc\helpers\HTML;

HTML::h1('array_merge_recursive()');


$array1 = [
  [
      3,
      [
          4,
          5,
          [
              6,
              7
          ],
          8
      ],
      9
  ]
];

$array2 = [
    1,
    [
        2,
        10,
        [
            11,
            12
        ],
        13
    ],
    14
];

HTML::pre(array_merge_recursive($array1, $array2));
