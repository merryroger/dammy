<?php
/**
 * Created by: Merry Roger
 * Date: 14.04.2020
 */

$this->config = [
    'blocks' => 1,
    'name' => [
      'newsBody'
    ],
    'tags' => [
        'section'
    ],
    'attributes' => [
        ' class="news_body"'
    ],
    'sources' => [

    ],
    'handler' => [
        'tyrion'
    ],
    'assembly' => '<section class="body headline_news"><aside class="media collection">&nbsp;</aside><#=newsBody #></section>'
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