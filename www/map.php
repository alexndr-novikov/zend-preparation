<?php
return [
    new \Doc\models\RootCategory('Language Reference', 'language-reference', [
        new \Doc\models\SubCategory('Basic syntax','basic-syntax', [
            new \Doc\models\DocPage('PHP tags', 'phptags'),
            new \Doc\models\DocPage('Escaping from HTML', 'escaping'),
            new \Doc\models\DocPage('Instruction separation', 'separation'),
            new \Doc\models\DocPage('Comments', 'comments'),
        ]),
        new \Doc\models\SubCategory('Types', 'types', [
            new \Doc\models\DocPage('Introduction','intro'),
            new \Doc\models\DocPage('Booleans','booleans'),
            new \Doc\models\DocPage('Integers','integers'),
            new \Doc\models\DocPage('Floating point numbers','floating'),
            new \Doc\models\DocPage('Strings','strings'),
            new \Doc\models\DocPage('Arrays','arrays'),
            new \Doc\models\DocPage('Iterables','iterables'),
            new \Doc\models\DocPage('Objects','objects'),
            new \Doc\models\DocPage('Resources','resources'),
            new \Doc\models\DocPage('NULL','null'),
            new \Doc\models\DocPage('Callbacks / Callables','callbacks-callables'),
            new \Doc\models\DocPage('Pseudo-types and variables used in this documentation','pseudo-types'),
            new \Doc\models\DocPage('Type Juggling','type-manipulations'),
        ]),
        new \Doc\models\SubCategory('Variables', 'variables', [
            new \Doc\models\DocPage('Basics','basics'),
            new \Doc\models\DocPage('Predefined Variables','predefined'),
            new \Doc\models\DocPage('Variable scope','scope'),
            new \Doc\models\DocPage('Variable variables','variable'),
            new \Doc\models\DocPage('Variables From External Sources','external'),
        ]),
        new \Doc\models\SubCategory('Constants', 'constants', [
            new \Doc\models\DocPage('Syntax','syntax'),
            new \Doc\models\DocPage('Magic constants','predefined'),
        ]),
    ]),
];