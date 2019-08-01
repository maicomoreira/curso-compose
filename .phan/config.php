<?php


return [


    "target_php_version" => '7.1',


    'directory_list' => [
        'src',
        'vendor/symfony/console',
        'vendor/symfony/dom-crawler',
        'vendor/GuzzleHttp/Guzzle',
        'vendor/GuzzleHttp/Client',
        'vendor/psr/http-message',
        'vendor/http/Url'
    ],


    "exclude_analysis_directory_list" => [
        'vendor/'
    ],


    'plugins' => [
        // checks if a function, closure or method unconditionally returns.

        // can also be written as 'vendor/phan/phan/.phan/plugins/AlwaysReturnPlugin.php'
        'AlwaysReturnPlugin',
        // Checks for syntactically unreachable statements in
        // the global scope or function bodies.
        'UnreachableCodePlugin',
        'DollarDollarPlugin',
        'DuplicateArrayKeyPlugin',
        'PregRegexCheckerPlugin',
        'PrintfCheckerPlugin',
    ],
];

