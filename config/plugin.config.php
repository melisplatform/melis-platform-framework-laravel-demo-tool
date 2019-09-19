<?php

return [
    'plugins' => [
        'melisplatformframeworklaraveldemotool' => [
            'conf' => [
                // user rights exclusions
                'rightsDisplay' => 'none',
            ],
            'plugins' => [
                'MelisPlatformFrameworkLaravelDemoToolPlugin' => [
                    'front' => [
                        'template_path' => ['MelisPlatformFrameworkLaravelDemoTool/list'],
                        'id' => 'laravelplugin',
                    ],
                    'melis' => [
                        'subcategory' => array(
                            'id' => 'thirdPartyFramework',
                            'title' => 'Frameworks'
                        ),
                        'name' => 'tr_melisplatformframeworklaraveldemotool_plugin_title',
                        'thumbnail' => '/MelisPlatformFrameworkLaravelDemoTool/plugins/plugin.jpg',
                        'description' => 'tr_melisplatformframeworklaraveldemotool_plugin_desc',
                        /*
                         * if set this plugin will belong to a specific marketplace section,
                         * if not it will go directly to ( Others ) section
                         *  - available section for templating plugins as of 2019-05-16
                         *    - MelisCms
                         *    - MelisMarketing
                         *    - MelisSite
                         *    - Others
                         *    - CustomProjects
                         */
                        'section' => 'CustomProjects',
                    ],
                ],
             ],
        ],
     ],
];