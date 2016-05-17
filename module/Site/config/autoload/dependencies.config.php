<?php

return [
    "dependencies" =>  [
        'aliases'       => [],
        'invokables'    => [],
        'factories'     => [
            Site\Page\HomePage::class   => Site\Factory\PageFactory::class,
        ],
    ]
];
