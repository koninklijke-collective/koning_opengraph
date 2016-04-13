<?php
$EM_CONF[$_EXTKEY] = array(
    'title' => 'Open Graph',
    'description' => 'Manage open graph tags in TYPO3',
    'category' => 'plugin',
    'version' => '1.0.0',
    'state' => 'alpha',
    'clearCacheOnLoad' => true,
    'author' => 'Jesper Paardekooper',
    'author_email' => 'j.paardekooper@grandslam-media.nl',
    'author_company' => 'GrandSlam Media',
    'constraints' => array(
        'depends' => array(
            'typo3' => '6.2.0-8.99.99',
        ),
        'conflicts' => array(),
        'suggests' => array(),
    ),
    'autoload' => array(
        'psr-4' => array(
            'Keizer\\KoningOpengraph\\' => 'Classes'
        )
    ),
);