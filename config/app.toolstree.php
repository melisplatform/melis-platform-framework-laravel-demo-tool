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
                        'meliscustom_toolstree_section' => [
                            'interface' => [
                                'melisplatformframeworklaraveldemotool_conf' => [
                                    'conf' => [
                                        'id' => 'id_melisplatformframeworklaraveldemotool_leftnemu',
                                        'melisKey' => 'melisplatformframeworklaraveldemotool_leftnemu',
                                        'name' => 'tr_melisplatformframeworklaraveldemotool_tool',
                                        'icon' => 'fa fa-puzzle-piece',
                                    ],
                                    'interface' => [
                                        'melisplatformframeworklaraveldemotool_tool_1' => [
                                            'conf' => [
                                                'id' => 'id_melisplatformframeworklaraveldemotool_tool_1',
                                                'melisKey' => 'melisplatformframeworklaraveldemotool_tool_1',
                                                'name' => 'tr_melisplatformframeworklaraveldemotool_tool_1',
                                                'icon' => 'fa fa-puzzle-piece',
                                            ],
                                            'forward' => [
                                                'module' => 'Melisplatformframeworklaraveldemotool',
                                                'controller' => 'Index',
                                                'action' => 'render-tool1',
                                                'jscallback' => '',
                                                'jsdatas' => []
                                            ],
                                        ],
                                        'melisplatformframeworklaraveldemotool_tool_2' => [
                                            'conf' => [
                                                'id' => 'id_melisplatformframeworklaraveldemotool_tool_2',
                                                'melisKey' => 'melisplatformframeworklaraveldemotool_tool_2',
                                                'name' => 'tr_melisplatformframeworklaraveldemotool_tool_2',
                                                'icon' => 'fa fa-puzzle-piece',
                                            ],
                                            'forward' => [
                                                'module' => 'Melisplatformframeworklaraveldemotool',
                                                'controller' => 'Index',
                                                'action' => 'render-tool2',
                                                'jscallback' => '',
                                                'jsdatas' => []
                                            ],
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