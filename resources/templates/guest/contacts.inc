<?php
/**
 * Created by: Merry Roger
 * Date: 07.04.2020
 */

$this->config = [
    'blocks' => 5,
    'tags' => [
        'section',
        'section',
        'section',
        'section',
        'section'
    ],
    'attributes' => [
        ' class="body info"',
        ' class="body about"',
        ' class="body about"',
        ' class="body about"',
        ' class="body about"'
    ],
    'sources' => [
        'documents/contacts/central.xml',
        'documents/contacts/print_yard.xml',
        'documents/contacts/print_house.xml',
        'documents/contacts/print_world.xml',
        'documents/contacts/pechatnik.xml'
    ],
    /* It should be used if it`s need to show these elements with determined decoration
    'xslt' => [
        [
            'docheader' => '',
            'colontitule' => '',
            'stamp' => ''
        ],
        [
            'docheader' => '',
            'colontitule' => '',
            'stamp' => ''
        ],
        [
            'docheader' => '',
            'colontitule' => '',
            'stamp' => ''
        ]
    ]
    */
];