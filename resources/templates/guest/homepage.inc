<?php
/**
 * Created by: Merry Roger
 * Date: 03.04.2020
 */

$this->config = [
    'blocks' => 2,
    'tags' => [
        'section',
        'section'
    ],
    'attributes' => [
        ' class="body announce"',
        ' class="body orders"'
    ],
    'sources' => [
        'documents/production/product_catalogue_list.xml',
        'documents/orders/make_orders.xml'
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