<?php

return [
    'type' => 'home',
    'name' => 'Home',
    'view' => 'home',
    'single' => true,
    'fields' => [
        [
            'key' => 'route',
            'type' => config('cms.fields.route_field_type'),
            'rules' => 'required',
            'label' => 'Route',
        ],
        [
            'key' => 'title',
            'type' => 'text',
        ],
        [
            'key' => 'body',
            'type' => 'textarea',
        ],
        [
            'key' => 'link',
            'type' => 'text',
        ],
    ],
];
