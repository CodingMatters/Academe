<?php

return [
    "dependencies" =>  [
        'aliases' => [

        ],
        'abstract_factories' => [

        ],
        'factories' => [
            Site\Page\HomePage::class => Site\Factory\PageFactory::class,
            'translator'    => Zend\Mvc\Service\TranslatorServiceFactory::class,
            'navigation'    => Zend\Navigation\Service\DefaultNavigationFactory::class,
            'sidebar'       => Application\Factory\SidebarNavigationFactory::class,
            'header'        => Application\Factory\HeaderNavigationFactory::class,
        ],
        'invokables' => [

        ]
    ]
];
