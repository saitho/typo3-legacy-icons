<?php

$EM_CONF['legacy_icons'] = [
    'title' => 'Legacy Backend Icons',
    'description' => 'Restores the original colorful icons to TYPO3 CMS v14 backend',
    'category' => 'be',
    'author' => 'Mario Lubenka',
    'author_email' => 'me@saitho.me',
    'state' => 'stable',
    'version' => '1.0.1',
    'constraints' => [
        'depends' => [
            'typo3' => '14.0.0-14.99.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
