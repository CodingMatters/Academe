<?php

return [
    'routes' => [
        [
            'name' => 'home',
            'path' => '/',
            'middleware' => Site\Page\HomePage::class,
            'allowed_methods' => ['GET'],
        ],
//        [
//            'name' => 'admin',
//            'type' => Zend\Router\Http\Hostname::class,
//            'options' => [
//                'route' => ':4th.[:3rd.]:2nd.:1st', // domain levels from right to left
//                'contraints' => [
//                    '4th' => 'admin',
//                    '3rd' => '.*?', // optional 3rd level domain such as .ci, .dev or .test
//                    '2nd' => 'academe',
//                    '1st' => 'localhost',
//                ],
//            ],
//            'may_terminater' => true,
//            'child_routes' => [
//                [
//                    'name' => 'home',
//                    'path' => '/',
//                    'middleware' => Site\Page\HomePage::class,
//                    'allowed_methods' => ['GET'],
//                    'may_terminater' => true,
//                ],
//            ]
//        ]
    ],
];
