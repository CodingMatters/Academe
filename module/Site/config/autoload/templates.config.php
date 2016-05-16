<?php

return [
    'templates' => [
        'layout' => 'layout/default',
        'map' => [
            'layout/default' => __DIR__ . '/../../templates/layout/site.phtml',
            'error/error'    => __DIR__ . '/../../templates/error/error.phtml',
            'error/404'      => __DIR__ . '/../../templates/error/404.phtml',
            'template/footer'                   => __DIR__ . '/../../templates/layout/partial/footer.phtml',
            'template/navigation/sidebar'       =>
                __DIR__ . '/../../templates/layout/template/navigation/sidebar.phtml',
            'template/navigation/header'        => __DIR__ . '/../../templates/layout/template/navigation/header.phtml',
            'template/navigation/breadcrumbs'   =>
                __DIR__ . '/../../templates/layout/template/navigation/breadcrumbs.phtml',
            'partial/navigation/header'         => __DIR__ . '/../../templates/layout/partial/navigation/header.phtml',
            'partial/navigation/sidebar'        => __DIR__ . '/../../templates/layout/partial/navigation/sidebar.phtml',
            'partial/navigation/breadcrumbs'    =>
                __DIR__ . '/../../templates/layout/partial/navigation/breadcrumbs.phtml',
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
