<?php
########################################################################
# Extension Manager/Repository config file for ext "static_info_tables_nl".
#
# Auto generated 16-06-2011 09:40
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = [
    'title' => 'Static Info Tables (nl)',
    'description' => '(nl) language pack for the Static Info Tables providing localized names for countries, currencies and so on.',
    'category' => 'misc',
    'shy' => 0,
    'version' => '6.8.0',
    'conflicts' => '',
    'priority' => '',
    'loadOrder' => '',
    'module' => '',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearcacheonload' => 0,
    'lockType' => '',
    'author' => 'Achim Fritz',
    'author_email' => 'achim.fritz@b13.com',
    'author_company' => 'RogueSheep, dare to step outside your pasture.',
    'CGLcompliance' => '',
    'CGLcompliance_note' => '',
    'constraints' => [
        'depends' => [
            'static_info_tables' => '6.7.3-6.99.99',
            'typo3' => '8.7.0-10.99.99',
        ],
        'suggests' => [
        ],
    ],
];
