<?php

/**
 * Melis Technology (http://www.melistechnology.com]
 *
 * @copyright Copyright (c] 2015 Melis Technology (http://www.melistechnology.com]
 *
 */

return [
    'plugins' => [
        'meliscore' => [
            'interface' => [
                'meliscore_leftmenu' => [
                    'interface' => [

                        'meliscore_toolstree_section' => [
                            'interface' => [
                                'meliscore_tool_creatrion_designs' => [
                                    'conf' => [
                                        'id' => 'id_meliscore_tool_creatrion_designs',
                                        'melisKey' => 'meliscore_tool_creatrion_designs',
                                        'name' => 'tr_meliscore_tool_creatrion_designs',
                                        'icon' => 'fa fa-paint-brush',
                                    ],
                                    'interface' => [

                                        'meliscore_tool_tools' => [
                                            'conf' => [
                                                'id' => 'id_meliscore_tool_tools',
                                                'melisKey' => 'meliscore_tool_tools',
                                                'name' => 'tr_meliscore_tool_tools',
                                                'icon' => 'fa fa-magic',
                                            ],
                                            'interface' => [
                                                'melisplatformframeworklaraveldemotool_tool' => [
                                                    'conf' => [
                                                        'id' => 'id_melisplatformframeworklaraveldemotool_tool',
                                                        'melisKey' => 'melisplatformframeworklaraveldemotool_tool',
                                                        'name' => 'tr_melisplatformframeworklaraveldemotool_tool',
                                                        'icon' => 'fa fa-puzzle-piece',
                                                    ],
                                                    'forward' => [
                                                        'module' => 'MelisPlatformFrameworkLaravelDemoTool',
                                                        'controller' => 'Index',
                                                        'action' => 'render-tool',
                                                        'jscallback' => '',
                                                        'jsdatas' => []
                                                    ]
                                                ]
                                            ]
                                        ]

                                    ]
                                ]
                            ]
                        ]

                    ]
                ]
            ]
        ]
    ]
];