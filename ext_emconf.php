<?php

########################################################################
# Extension Manager/Repository config file for ext "base_html".
########################################################################

$EM_CONF[$_EXTKEY] = [
    'title' => 'HTML5 Parser',
    'description' => 'Standards compliant HTML5 parser and serializer written in PHP (html5-php)',
    'category' => 'misc',
    'version' => '2.8.0',
    'state' => 'stable',
    'clearcacheonload' => 1,
    'author' => 'Matt Butcher, Matt Farina, Asmir Mustafic, Franz Holzinger',
    'author_email' => 'franz@ttproducts.de',
    'author_company' => 'jambage.com',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-12.4.99'
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
