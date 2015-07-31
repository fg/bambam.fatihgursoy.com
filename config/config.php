<?php

return [
    'author' => [
        'name' => 'Fatih GÜRSOY',
        'email' => 'fatihgursoy@ymail.com'
    ],

    'theme' => [
        'path' => 'defaultba'
    ],

    'routes' => [
        '__root__' => [
            'route' => '/',
            'action' => 'Application\\Controller\\Home:index',
        ],
    ]
];