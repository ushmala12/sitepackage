<?php

/**
 * Extension Manager/Repository config file for ext "newsitepackage".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'newsitepackage',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
            'fluid_styled_content' => '11.5.0-11.5.99',
            'rte_ckeditor' => '11.5.0-11.5.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Pits\\Newsitepackage\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Ushmala B',
    'author_email' => 'ushmala.b@pitsolutions.com',
    'author_company' => 'pits',
    'version' => '1.0.0',
];
