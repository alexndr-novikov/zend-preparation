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
            new \Doc\models\DocPage('Internal (built-in) functions','internal'),
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
        new \Doc\models\SubCategory('Predefined Exceptions', 'reserved.exceptions', [
            new \Doc\models\DocPage('Exception', 'exception'),
            new \Doc\models\DocPage('ErrorException', 'errorexception'),
            new \Doc\models\DocPage('Error', 'error'),
            new \Doc\models\DocPage('ArgumentCountError', 'argumentcounterror'),
            new \Doc\models\DocPage('ArithmeticError', 'arithmeticerror'),
            new \Doc\models\DocPage('AssertionError', 'assertionerror'),
            new \Doc\models\DocPage('DivisionByZeroError', 'divisionbyzeroerror'),
            new \Doc\models\DocPage('ParseError', 'parseerror'),
            new \Doc\models\DocPage('TypeError', 'typeerror'),
        ]),
        new \Doc\models\SubCategory('Predefined Interfaces and Classes', 'reserved.interfaces', [
            new \Doc\models\DocPage('Traversable', 'traversable'),
            new \Doc\models\DocPage('Iterator', 'iterator'),
            new \Doc\models\DocPage('IteratorAggregate', 'iteratoraggregate'),
            new \Doc\models\DocPage('Throwable', 'throwable'),
            new \Doc\models\DocPage('ArrayAccess', 'arrayaccess'),
            new \Doc\models\DocPage('Serializable', 'serializable'),
            new \Doc\models\DocPage('Closure', 'closure'),
            new \Doc\models\DocPage('Generator', 'generator'),
        ]),

        new \Doc\models\SubCategory('Predefined Variables', 'reserved.variables', [
            new \Doc\models\DocPage('Superglobals', 'superglobals'),
            new \Doc\models\DocPage('$GLOBALS', 'globals'),
            new \Doc\models\DocPage('$_SERVER', 'server'),
            new \Doc\models\DocPage('$_GET', 'get'),
            new \Doc\models\DocPage('$_POST', 'post'),
            new \Doc\models\DocPage('$_FILES', 'files'),
            new \Doc\models\DocPage('$_REQUEST', 'request'),
            new \Doc\models\DocPage('$_SESSION', 'session'),
            new \Doc\models\DocPage('$_ENV', 'environment'),
            new \Doc\models\DocPage('$_COOKIE', 'cookies'),
            new \Doc\models\DocPage('$php_errormsg', 'phperrormsg'),
            new \Doc\models\DocPage('$HTTP_RAW_POST_DATA', 'httprawpostdata'),
            new \Doc\models\DocPage('$http_response_header', 'httpresponseheader'),
            new \Doc\models\DocPage('$argc', 'argc'),
            new \Doc\models\DocPage('$argv', 'argv'),
        ]),
        new \Doc\models\SubCategory('Context options and parameters', 'context', [
            new \Doc\models\DocPage('Socket context options', 'socket'),
            new \Doc\models\DocPage('HTTP context options', 'http'),
            new \Doc\models\DocPage('FTP context options', 'ftp'),
            new \Doc\models\DocPage('SSL context options', 'ssl'),
            new \Doc\models\DocPage('CURL context options', 'curl'),
            new \Doc\models\DocPage('Phar context options', 'phar'),
            new \Doc\models\DocPage('MongoDB context options', 'mongodb'),
            new \Doc\models\DocPage('Context parameters', 'params'),
            new \Doc\models\DocPage('Zip context options', 'zip'),
        ]),
    ]),
    new \Doc\models\RootCategory('Functions', 'functions', [
        new \Doc\models\SubCategory('Array', 'array', [
            new \Doc\models\DocPage('array_change_key_case()', 'array-change-key-case'),
            new \Doc\models\DocPage('array_chunk()', 'array_chunk'),
            new \Doc\models\DocPage('array_column()', 'array_column'),
            new \Doc\models\DocPage('array_combine()', 'array_combine'),
            new \Doc\models\DocPage('array_count_values()', 'array_count_values'),
            new \Doc\models\DocPage('array_diff_assoc()', 'array_diff_assoc'),
            new \Doc\models\DocPage('array_diff_key()', 'array_diff_key'),
            new \Doc\models\DocPage('array_diff_uassoc()', 'array_diff_uassoc'),
            new \Doc\models\DocPage('array_diff_ukey()', 'array_diff_ukey'),
            new \Doc\models\DocPage('array_diff()', 'array_diff'),
            new \Doc\models\DocPage('array_fill_keys()', 'array_fill_keys'),
            new \Doc\models\DocPage('array_fill()', 'array_fill'),
            new \Doc\models\DocPage('array_filter()', 'array_filter'),
            new \Doc\models\DocPage('array_flip()', 'array_flip'),
            new \Doc\models\DocPage('array_intersect_assoc()', 'array_intersect_assoc'),
            new \Doc\models\DocPage('array_intersect_key()', 'array_intersect_key'),
            new \Doc\models\DocPage('array_intersect_uassoc()', 'array_intersect_uassoc'),
            new \Doc\models\DocPage('array_intersect_ukey()', 'array_intersect_ukey'),
            new \Doc\models\DocPage('array_intersect()', 'array_intersect'),
            new \Doc\models\DocPage('array_key_exists()', 'array_key_exists'),
            new \Doc\models\DocPage('array_keys()', 'array_keys'),
            new \Doc\models\DocPage('array_map()', 'array_map'),
            new \Doc\models\DocPage('array_merge_recursive()', 'array_merge_recursive'),
            new \Doc\models\DocPage('array_merge()', 'array_merge'),
//            new \Doc\models\DocPage('array_multisort()', 'array_multisort'),
            new \Doc\models\DocPage('array_pad()', 'array_pad'),
            new \Doc\models\DocPage('array_pop()', 'array_pop'),
            new \Doc\models\DocPage('array_product()', 'array_product'),
            new \Doc\models\DocPage('array_push()', 'array_push'),
            new \Doc\models\DocPage('array_rand()', 'array_rand'),
            new \Doc\models\DocPage('array_reduce()', 'array_reduce'),
            new \Doc\models\DocPage('array_replace_recursive()', 'array_replace_recursive'),
            new \Doc\models\DocPage('array_replace()', 'array_replace'),
            new \Doc\models\DocPage('array_reverse()', 'array_reverse'),
            new \Doc\models\DocPage('array_search()', 'array_search'),
            new \Doc\models\DocPage('array_shift()', 'array_shift'),
            new \Doc\models\DocPage('array_slice()', 'array_slice'),
            new \Doc\models\DocPage('array_splice()', 'array_splice'),
            new \Doc\models\DocPage('array_sum()', 'array_sum'),
//            new \Doc\models\DocPage('array_udiff_assoc()', 'array_udiff_assoc'),
//            new \Doc\models\DocPage('array_udiff_uassoc()', 'array_udiff_uassoc'),
            new \Doc\models\DocPage('array_udiff()', 'array_udiff'),
//            new \Doc\models\DocPage('array_uintersect_assoc()', 'array_uintersect_assoc'),
//            new \Doc\models\DocPage('array_uintersect_uassoc()', 'array_uintersect_uassoc'),
//            new \Doc\models\DocPage('array_uintersect()', 'array_uintersect'),
            new \Doc\models\DocPage('array_unique()', 'array_unique'),
            new \Doc\models\DocPage('array_unshift()', 'array_unshift'),
            new \Doc\models\DocPage('array_values()', 'array_values'),
            new \Doc\models\DocPage('array_walk_recursive()', 'array_walk_recursive'),
            new \Doc\models\DocPage('array_walk()', 'array_walk'),
            new \Doc\models\DocPage('array()', 'array'),
            new \Doc\models\DocPage('arsort()', 'arsort'),
            new \Doc\models\DocPage('asort()', 'asort'),
            new \Doc\models\DocPage('compact()', 'compact'),
            new \Doc\models\DocPage('count()', 'count'),
            new \Doc\models\DocPage('current()', 'current'),
            new \Doc\models\DocPage('each()', 'each'),
            new \Doc\models\DocPage('end()', 'end'),
//            new \Doc\models\DocPage('extract()', 'extract'),
            new \Doc\models\DocPage('in_array()', 'in_array'),
            new \Doc\models\DocPage('key_exists()', 'key_exists'),
            new \Doc\models\DocPage('key()', 'key'),
//            new \Doc\models\DocPage('krsort()', 'krsort'),
//            new \Doc\models\DocPage('ksort()', 'ksort'),
            new \Doc\models\DocPage('list()', 'list'),
//            new \Doc\models\DocPage('natcasesort()', 'natcasesort'),
//            new \Doc\models\DocPage('natsort()', 'natsort'),
            new \Doc\models\DocPage('next()', 'next'),
            new \Doc\models\DocPage('pos()', 'pos'),
            new \Doc\models\DocPage('prev()', 'prev'),
            new \Doc\models\DocPage('range()', 'range'),
            new \Doc\models\DocPage('reset()', 'reset'),
//            new \Doc\models\DocPage('rsort()', 'rsort'),
            new \Doc\models\DocPage('shuffle()', 'shuffle'),
            new \Doc\models\DocPage('sizeof()', 'sizeof'),
//            new \Doc\models\DocPage('sort()', 'sort'),
//            new \Doc\models\DocPage('uasort()', 'uasort'),
//            new \Doc\models\DocPage('uksort()', 'uksort'),
//            new \Doc\models\DocPage('usort()', 'usort'),
        ]),
        new \Doc\models\SubCategory('Class/Object Information', 'classobj', [
            new \Doc\models\DocPage('__autoload', '__autoload.php'),
            new \Doc\models\DocPage('call_user_method_array', 'call_user_method_array'),
            new \Doc\models\DocPage('call_user_method', 'call_user_method'),
            new \Doc\models\DocPage('class_alias', 'class_alias'),
            new \Doc\models\DocPage('class_exists', 'class_exists'),
            new \Doc\models\DocPage('get_called_class', 'get_called_class'),
            new \Doc\models\DocPage('get_class_methods', 'get_class_methods'),
            new \Doc\models\DocPage('get_class_vars', 'get_class_vars'),
            new \Doc\models\DocPage('get_class', 'get_class'),
            new \Doc\models\DocPage('get_declared_classes', 'get_declared_classes'),
            new \Doc\models\DocPage('get_declared_interfaces', 'get_declared_interfaces'),
            new \Doc\models\DocPage('get_declared_traits', 'get_declared_traits'),
            new \Doc\models\DocPage('get_object_vars', 'get_object_vars'),
            new \Doc\models\DocPage('get_parent_class', 'get_parent_class'),
            new \Doc\models\DocPage('interface_exists', 'interface_exists'),
            new \Doc\models\DocPage('is_a', 'is_a'),
            new \Doc\models\DocPage('is_subclass_of', 'is_subclass_of'),
            new \Doc\models\DocPage('method_exists', 'method_exists'),
            new \Doc\models\DocPage('property_exists', 'property_exists'),
            new \Doc\models\DocPage('trait_exists', 'trait_exists'),
        ]),
        new \Doc\models\SubCategory('Variable handling', 'var', [
            new \Doc\models\DocPage('boolval', 'boolval'),
            new \Doc\models\DocPage('debug_zval_dump', 'debug_zval_dump'),
            new \Doc\models\DocPage('doubleval', 'doubleval'),
            new \Doc\models\DocPage('empty', 'empty'),
            new \Doc\models\DocPage('floatval', 'floatval'),
            new \Doc\models\DocPage('get_defined_vars', 'get_defined_vars'),
            new \Doc\models\DocPage('get_resource_type', 'get_resource_type'),
            new \Doc\models\DocPage('gettype', 'gettype'),
            new \Doc\models\DocPage('import_request_variables', 'import_request_variables'),
            new \Doc\models\DocPage('intval', 'intval'),
            new \Doc\models\DocPage('is_array', 'is_array'),
            new \Doc\models\DocPage('is_bool', 'is_bool'),
            new \Doc\models\DocPage('is_callable', 'is_callable'),
            new \Doc\models\DocPage('is_double', 'is_double'),
            new \Doc\models\DocPage('is_float', 'is_float'),
            new \Doc\models\DocPage('is_int', 'is_int'),
            new \Doc\models\DocPage('is_integer', 'is_integer'),
            new \Doc\models\DocPage('is_iterable', 'is_iterable'),
            new \Doc\models\DocPage('is_long', 'is_long'),
            new \Doc\models\DocPage('is_null', 'is_null'),
            new \Doc\models\DocPage('is_numeric', 'is_numeric'),
            new \Doc\models\DocPage('is_object', 'is_object'),
            new \Doc\models\DocPage('is_real', 'is_real'),
            new \Doc\models\DocPage('is_resource', 'is_resource'),
            new \Doc\models\DocPage('is_scalar', 'is_scalar'),
            new \Doc\models\DocPage('is_string', 'is_string'),
            new \Doc\models\DocPage('isset', 'isset'),
            new \Doc\models\DocPage('print_r', 'print_r'),
            new \Doc\models\DocPage('serialize', 'serialize'),
            new \Doc\models\DocPage('settype', 'settype'),
            new \Doc\models\DocPage('strval', 'strval'),
            new \Doc\models\DocPage('unserialize', 'unserialize'),
            new \Doc\models\DocPage('unset', 'unset'),
            new \Doc\models\DocPage('var_dump', 'var_dump'),
            new \Doc\models\DocPage('var_export', 'var_export'),
        ]),
        new \Doc\models\SubCategory('Strings', 'strings', [
            new \Doc\models\DocPage('addslashes', 'addslashes'),
            new \Doc\models\DocPage('bin2hex', 'bin2hex'),
            new \Doc\models\DocPage('chop', 'chop'),
            new \Doc\models\DocPage('chr', 'chr'),
            new \Doc\models\DocPage('chunk_split', 'chunk_split'),
            new \Doc\models\DocPage('convert_uudecode', 'convert_uudecode'),
            new \Doc\models\DocPage('convert_uuencode', 'convert_uuencode'),
            new \Doc\models\DocPage('count_chars', 'count_chars'),
            new \Doc\models\DocPage('crc32', 'crc32'),
            new \Doc\models\DocPage('echo', 'echo'),
            new \Doc\models\DocPage('explode', 'explode'),
            new \Doc\models\DocPage('implode', 'implode'),
            new \Doc\models\DocPage('hex2bin', 'hex2bin'),
            new \Doc\models\DocPage('join', 'join'),
            new \Doc\models\DocPage('lcfirst', 'lcfirst'),
            new \Doc\models\DocPage('md5', 'md5'),
            new \Doc\models\DocPage('md5_file', 'md5_file'),
            new \Doc\models\DocPage('nl_langinfo', 'nl_langinfo'),
            new \Doc\models\DocPage('nl2br', 'nl2br'),
            new \Doc\models\DocPage('ord', 'ord'),
            new \Doc\models\DocPage('sha1', 'sha1'),
            new \Doc\models\DocPage('sha1_file', 'sha1_file'),
            new \Doc\models\DocPage('strip_tags', 'strip_tags'),
            new \Doc\models\DocPage('strpbrk', 'strpbrk'),
            new \Doc\models\DocPage('strlen', 'strlen'),
            new \Doc\models\DocPage('strrev', 'strrev'),
            new \Doc\models\DocPage('str_shuffle', 'str_shuffle'),
            new \Doc\models\DocPage('str_pad', 'str_pad'),
            new \Doc\models\DocPage('trim', 'trim'),
            new \Doc\models\DocPage('rtrim', 'rtrim'),
            new \Doc\models\DocPage('ltrim', 'ltrim'),
            new \Doc\models\DocPage('printf', 'printf'),
            new \Doc\models\DocPage('soundex', 'soundex'),
            new \Doc\models\DocPage('sprintf', 'sprintf'),
            new \Doc\models\DocPage('str_repeat', 'str_repeat'),
            new \Doc\models\DocPage('ucfirst', 'ucfirst'),
            new \Doc\models\DocPage('ucwords', 'ucwords'),
        ]),
    ]),
];