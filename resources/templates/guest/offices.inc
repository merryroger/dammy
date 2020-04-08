<?php
/**
 * Created by: Merry Roger
 * Date: 07.04.2020
 */

$this->config = [
    'blocks' => 2,
    'tags' => [
        'section',
        'section'
    ],
    'attributes' => [
        ' class="body announce"',
        ' class="body about"'
    ],
    'sources' => [
        'documents/offices/offices.xml',
        'documents/offices/review.xml'
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