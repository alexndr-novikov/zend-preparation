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
        new \Doc\models\SubCategory('Expressions', 'expressions', [
            new \Doc\models\DocPage('Expressions','expressions'),
        ]),
        new \Doc\models\SubCategory('Operators', 'operators', [
            new \Doc\models\DocPage('Operator Precedence','precedence'),
            new \Doc\models\DocPage('Arithmetic Operators','arithmetic'),
            new \Doc\models\DocPage('Assignment Operators','assignment'),
            new \Doc\models\DocPage('Bitwise Operators','bitwise'),
            new \Doc\models\DocPage('Comparison Operators','comparison'),
            new \Doc\models\DocPage('Error Control Operators','errorcontrol'),
            new \Doc\models\DocPage('Execution Operators','execution'),
            new \Doc\models\DocPage('Incrementing/Decrementing Operators','increment'),
            new \Doc\models\DocPage('Logical Operators','logical'),
            new \Doc\models\DocPage('String Operators','string'),
            new \Doc\models\DocPage('Array Operators','array'),
            new \Doc\models\DocPage('Type Operators','type'),
        ]),
        new \Doc\models\SubCategory('Control Structures', 'control-structures', [
            new \Doc\models\DocPage('if','if'),
            new \Doc\models\DocPage('else','else'),
            new \Doc\models\DocPage('elseif/else if','elseif'),
            new \Doc\models\DocPage('Alternative syntax for control structures','alternative-syntax'),
            new \Doc\models\DocPage('while','while'),
            new \Doc\models\DocPage('do-​while','do-​while'),
            new \Doc\models\DocPage('for','for'),
            new \Doc\models\DocPage('foreach','foreach'),
            new \Doc\models\DocPage('break','break'),
            new \Doc\models\DocPage('continue','continue'),
            new \Doc\models\DocPage('switch','switch'),
            new \Doc\models\DocPage('declare','declare'),
            new \Doc\models\DocPage('return','return'),
            new \Doc\models\DocPage('require','require'),
            new \Doc\models\DocPage('include','include'),
            new \Doc\models\DocPage('require_​once','require_​once'),
            new \Doc\models\DocPage('include_​once','include_​once'),
            new \Doc\models\DocPage('goto','goto'),















        ]),
    ]),
];