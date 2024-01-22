<?php

return [
    'ctrl' => [
        'title' => 'Record',
        'label' => 'value_1',
        'security' => [
            'ignorePageTypeRestriction' => true,
        ],
    ],
    'columns' => [
        'value_1' => [
            'label' => 'value_1',
            'config' => [
                'type' => 'input',
                'size' => 10,
            ],
        ],
    ],
    'types' => [
        '0' => [
            'showitem' => 'value_1',
        ],
    ],

];
