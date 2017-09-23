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
            new \Doc\models\DocPage('do-while','do-while'),
            new \Doc\models\DocPage('for','for'),
            new \Doc\models\DocPage('foreach','foreach'),
            new \Doc\models\DocPage('break','break'),
            new \Doc\models\DocPage('continue','continue'),
            new \Doc\models\DocPage('switch','switch'),
            new \Doc\models\DocPage('declare','declare'),
            new \Doc\models\DocPage('return','return'),
            new \Doc\models\DocPage('require','require'),
            new \Doc\models\DocPage('include','include'),
            new \Doc\models\DocPage('require_once','require_once'),
            new \Doc\models\DocPage('include_once','include_once'),
            new \Doc\models\DocPage('goto','goto'),
        ]),
        new \Doc\models\SubCategory('Functions', 'functions', [
            new \Doc\models\DocPage('User-defined functions','user-defined'),
            new \Doc\models\DocPage('Function arguments','arguments'),
            new \Doc\models\DocPage('Returning values','returning-values'),
            new \Doc\models\DocPage('Variable functions','variable-functions'),
            new \Doc\models\DocPage('Internal (built-​in) functions','internal'),
            new \Doc\models\DocPage('Anonymous functions','anonymous'),
        ]),
        new \Doc\models\SubCategory('Classes and Objects', 'oop5', [
            new \Doc\models\DocPage('The Basics','basic'),
            new \Doc\models\DocPage('Properties','properties'),
            new \Doc\models\DocPage('Class Constants','constants'),
            new \Doc\models\DocPage('Autoloading Classes','autoload'),
            new \Doc\models\DocPage('Constructors and Destructors','decon'),
            new \Doc\models\DocPage('Constructors and Destructors : namespace feature','decon_namespace'),
            new \Doc\models\DocPage('Visibility','visibility'),
            new \Doc\models\DocPage('Object Inheritance','inheritance'),
            new \Doc\models\DocPage('Scope Resolution Operator (::)','paamayim-nekudotayim'),
            new \Doc\models\DocPage('Static Keyword','static'),
            new \Doc\models\DocPage('Class Abstraction','abstract'),
            new \Doc\models\DocPage('Object Interfaces','interfaces'),
            new \Doc\models\DocPage('Traits','traits'),
            new \Doc\models\DocPage('Anonymous classes','anonymous'),
            new \Doc\models\DocPage('Overloading','overloading'),
            new \Doc\models\DocPage('Object Iteration','iterations'),
            new \Doc\models\DocPage('Magic Methods','magic'),
            new \Doc\models\DocPage('Final Keyword','final'),
            new \Doc\models\DocPage('Object Cloning','cloning'),
            new \Doc\models\DocPage('Comparing Objects','object-comparison'),
            new \Doc\models\DocPage('Type Hinting','typehinting'),
            new \Doc\models\DocPage('Late Static Bindings','late-static-bindings'),
            new \Doc\models\DocPage('Objects and references','references'),
            new \Doc\models\DocPage('Object Serialization','serialization'),
        ]),
        new \Doc\models\SubCategory('Namespaces', 'namespaces', [
            new \Doc\models\DocPage('Namespaces overview', 'rationale'),
            new \Doc\models\DocPage('Defining namespaces', 'definition'),
            new \Doc\models\DocPage('Declaring sub-namespaces', 'nested'),
            new \Doc\models\DocPage('Defining multiple namespaces in the same file', 'definitionmultiple'),
            new \Doc\models\DocPage('Defining multiple namespaces in the same file (2)', 'definitionmultiple_2'),
            new \Doc\models\DocPage('Using namespaces: Basics', 'basics'),
            new \Doc\models\DocPage('Namespaces and dynamic language features', 'dynamic'),
            new \Doc\models\DocPage('namespace keyword and __NAMESPACE__ constant', 'nsconstants'),
            new \Doc\models\DocPage('Using namespaces: Aliasing/Importing', 'importing'),
            new \Doc\models\DocPage('Global space', 'global'),
            new \Doc\models\DocPage('Using namespaces: fallback to global function/constant', 'fallback'),
        ]),
        new \Doc\models\SubCategory('Errors', 'errors', [
            new \Doc\models\DocPage('Basics', 'basics'),
            new \Doc\models\DocPage('Errors in PHP 7', 'php7'),
        ]),
        new \Doc\models\SubCategory('Exceptions', 'exceptions', [
            new \Doc\models\DocPage('Basics', 'exceptions'),
            new \Doc\models\DocPage('Extending exceptions', 'extending'),
        ]),
        new \Doc\models\SubCategory('Generators', 'generators', [
            new \Doc\models\DocPage('Generators overview', 'overview'),
            new \Doc\models\DocPage('Generator syntax', 'syntax'),
        ]),
        new \Doc\models\SubCategory('References Explained', 'references', [
            new \Doc\models\DocPage('References', 'whatare.whatdo.arent.pass.return.unset.spot'),
        ]),
    ]),
];