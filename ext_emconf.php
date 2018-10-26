<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "bootstrap_grids"
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
    'title' => 'Grids for bootstrap',
    'description' => 'Gridelements for Bootstrap 4. Column grids, grids for simple accordions, tabs and content slider.',
    'category' => 'misc',
    'author' => 'Pascal Mayer',
    'author_email' => 'typo3@bsdist.ch',
    'author_company' => '',
    'version' => '2.0.0',
    'state' => 'stable',
    'uploadfolder' => '0',
    'createDirs' => '',
    'modify_tables' => '',
    'clearCacheOnLoad' => 1,
    'constraints' => [
        'depends' => [
            'typo3' => '7.6.0-9.5.99',
            'gridelements' => '8.0.0-8.99.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => ['InsanityMeetsHH\\BootstrapGrids\\' => 'Classes']
    ],
];
