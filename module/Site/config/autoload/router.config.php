<?php

return [
    'routes' => [
        [
            'name' => 'home',
            'path' => '/',
            'middleware' => Site\Page\HomePage::class,
            'allowed_methods' => ['GET'],
        ]
    ],
];
