<?php

/**
 * Melis Technology (http://www.melistechnology.com]
 *
 * @copyright Copyright (c] 2015 Melis Technology (http://www.melistechnology.com]
 *
 */

return [
    'third-party-framework' => [
        'index-path' => [
            '/Laravel/public/index.php'
        ],
        'translations' => [
            'locale' => [
                'en_EN' => [
                    __DIR__ .'/../../melis-platform-framework-laravel-demo-tool-logic/Resources/lang/en/messages.php'
                ],
                'fr_FR' => [
                    __DIR__ .'/../../melis-platform-framework-laravel-demo-tool-logic/Resources/lang/fr/messages.php'
                ]
            ]
        ]
    ],
    'plugins' => [
        'melisplatformframeworklaraveldemotool' => [
            'ressources' => [
                'js' => [
                    '/MelisPlatformFrameworkLaravelDemoTool/js/tool.js',
                ],
                /**
                 * the "build" configuration compiles all assets into one file to make
                 * lesser requests
                 */
                'build' => [
                    'disable_bundle' => true,
                ],
            ],
        ],
    ],
    'router' => [
        'routes' => [
        	'melis-backoffice' => [
                'child_routes' => [
                    'application-MelisPlatformFrameworkLaravelDemoTool' => [
                        'type'    => 'Literal',
                        'options' => [
                            'route'    => 'MelisPlatformFrameworkLaravelDemoTool',
                            'defaults' => [
                                '__NAMESPACE__' => 'MelisPlatformFrameworkLaravelDemoTool\Controller',
                            ],
                        ],
                        'may_terminate' => true,
                        'child_routes' => [
                            'default' => [
                                'type'    => 'Segment',
                                'options' => [
                                    'route'    => '/[:controller[/:action]]',
                                    'constraints' => [
                                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                        'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                                    ],
                                    'defaults' => [
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
        	],
        ],
    ],
    'translator' => [
        'locale' => 'en_EN',
    ],
    'service_manager' => [
        'aliases' => [
            'translator' => 'MvcTranslator'
        ],
    ],
    'controllers' => [
        'invokables' => [
            'MelisPlatformFrameworkLaravelDemoTool\Controller\Index' => 'MelisPlatformFrameworkLaravelDemoTool\Controller\IndexController',
        ],
    ],
    'controller_plugins' => array(
        'invokables' => array(
            'MelisPlatformFrameworkLaravelDemoToolPlugin' => 'MelisPlatformFrameworkLaravelDemoTool\Controller\Plugin\MelisPlatformFrameworkLaravelDemoToolPlugin',
        )
    ),
    'view_manager' => [
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'template_map' => [
            'MelisPlatformFrameworkLaravelDemoTool/list' => __DIR__ . '/../view/melis-platform-framework-laravel-demo-tool/plugins/list.phtml',
        ],
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
        'strategies' => [
            'ViewJsonStrategy',
        ],
    ],
];
