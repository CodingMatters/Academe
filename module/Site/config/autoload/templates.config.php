<?php

return [
    'templates' => [
        'layout' => 'layout/default',
        'map' => [
            'layout/default' => __DIR__ . '/../../templates/layout/site.phtml',
            'error/error'    => __DIR__ . '/../../templates/error/error.phtml',
            'error/404'      => __DIR__ . '/../../templates/error/404.phtml',
        ],
        'paths' => [
            'page'      => [__DIR__ . '/../../templates/page'],
            'layout'    => [__DIR__ . '/../../templates/layout'],
            'error'     => [__DIR__ . '/../../templates/error'],
        ],
    ],

    'view_helpers' => [
        // zend-servicemanager-style configuration for adding view helpers:
        // - 'aliases'
        // - 'invokables'
        // - 'factories'
        // - 'abstract_factories'
        // - etc.
    ],
];
