<?php

return [
    'Product\\Model\\Product' => [
        'fields' => [
            'stat' => [
                'type' => 'FLOAT',
                'length' => '3,2',
                'attrs' => [
                    'unsigned' => TRUE,
                    'default' => '0.00'
                ],
                'index' => 2000
            ]
        ]
    ],
    'ProductStat\\Model\\ProductStat' => [
        'fields' => [
            'id' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => TRUE,
                    'primary_key' => TRUE,
                    'auto_increment' => TRUE
                ],
                'index' => 1000
            ],
            'user' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => TRUE,
                    'null' => FALSE
                ],
                'index' => 2000
            ],
            'product' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => TRUE,
                    'null' => FALSE
                ],
                'index' => 3000
            ],
            'score' => [
                'type' => 'TINYINT',
                'attrs' => [
                    'unsigned' => TRUE,
                    'null' => FALSE,
                    'default' => 0
                ],
                'index' => 4000
            ],
            'comment' => [
                'type' => 'TEXT',
                'attrs' => [],
                'index' => 5000
            ],
            'reply' => [
                'type' => 'TEXT',
                'attrs' => [],
                'index' => 6000
            ],
            'updated' => [
                'type' => 'TIMESTAMP',
                'attrs' => [
                    'default' => 'CURRENT_TIMESTAMP',
                    'update' => 'CURRENT_TIMESTAMP'
                ],
                'index' => 10000
            ],
            'created' => [
                'type' => 'TIMESTAMP',
                'attrs' => [
                    'default' => 'CURRENT_TIMESTAMP'
                ],
                'index' => 11000
            ]
        ]
    ]
];