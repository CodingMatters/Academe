<?php

return [
    "dependencies" =>  [
        'aliases' => [

        ],
        'abstract_factories' => [

        ],
        'factories' => [
                Site\Page\HomePage::class => Site\Factory\PageFactory::class,
        ],
        'invokables' => [

        ]
    ]
];
