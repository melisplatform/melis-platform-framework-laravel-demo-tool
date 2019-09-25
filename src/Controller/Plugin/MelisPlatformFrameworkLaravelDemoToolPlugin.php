<?php

/**
 * Melis Technology (http://www.melistechnology.com)
 *
 * @copyright Copyright (c) 2016 Melis Technology (http://www.melistechnology.com)
 *
 */

namespace MelisPlatformFrameworkLaravelDemoTool\Controller\Plugin;

use MelisEngine\Controller\Plugin\MelisTemplatingPlugin;

/**
 * This plugin implements the business logic of the
 * "MelisPlatformFrameworkLaravelDemoToolPlugin" plugin.
 *
 * Please look inside app.plugins.php for possible awaited parameters
 * in front and back function calls.
 *
 * front() and back() are the only functions to create / update.
 * front() generates the website view
 *
 * Configuration can be found in $pluginConfig / $pluginFrontConfig / $pluginBackConfig
 * Configuration is automatically merged with the parameters provided when calling the plugin.
 * Merge detects automatically from the route if rendering must be done for front or back.
 *
 * How to call this plugin without parameters:
 * $plugin = $this->MelisPlatformFrameworkLaravelDemoToolPlugin();
 * $pluginView = $plugin->render();
 *
 * How to call this plugin with custom parameters:
 * $plugin = $this->MelisPlatformFrameworkLaravelDemoToolPlugin();
 * $parameters = array(
 *      'template_path' => 'Plugin/template'
 * );
 * $pluginView = $plugin->render($parameters);
 *
 * How to add to your controller's view:
 * $view->addChild($pluginView, 'plugin');
 *
 * How to display in your controller's view:
 * echo $this->plugin;
 *
 *
 */
class MelisPlatformFrameworkLaravelDemoToolPlugin extends MelisTemplatingPlugin
{
    public function __construct($updatesPluginConfig = array())
    {
        $this->configPluginKey = 'melisplatformframeworklaraveldemotool';
        $this->pluginXmlDbKey = 'MelisPlatformFrameworkLaravelDemoToolPlugin';
        parent::__construct($updatesPluginConfig);
    }

    /**
     * This function gets the datas and create an array of variables
     * that will be associated with the child view generated.
     */
    public function front()
    {
        /**
         * Using MelisPlatformService service from the Module MelisPlatformFrameworks,
         * the request to the Third Party Framework will handled and return as response content
         * by providing the Route of the request "/list" for example
         * and getting the response by calling the the getContent() method after
         */
        $thirdPartySrv = $this->getServiceLocator()->get('MelisPlatformService');
        $thirdPartySrv->setRoute('/laravel-list');
        $response = $thirdPartySrv->getContent();

        // Create an array with the variables that will be available in the view
        $viewVariables = [
            'content' => $response
        ];

        // return the variable array and let the view be created
        return $viewVariables;
    }
    
    /**
     * This method saves the XML version of this plugin in DB, for this pageId
     * Automatically called from savePageSession listener in PageEdition
     */
    public function savePluginConfigToXml($parameters)
    {
        $xmlValueFormatted = '';
        // template_path is mandatory for all plugins
        if (!empty($parameters['template_path']))
            $xmlValueFormatted .= "\t\t" . '<template_path><![CDATA[' . $parameters['template_path'] . ']]></template_path>';
        // for resizing
        $widthDesktop = null;
        $widthMobile   = null;
        $widthTablet  = null;
        if (! empty($parameters['melisPluginDesktopWidth'])) {
            $widthDesktop =  " width_desktop=\"" . $parameters['melisPluginDesktopWidth'] . "\" ";
        }
        if (! empty($parameters['melisPluginMobileWidth'])) {
            $widthMobile =  "width_mobile=\"" . $parameters['melisPluginMobileWidth'] . "\" ";
        }
        if (! empty($parameters['melisPluginTabletWidth'])) {
            $widthTablet =  "width_tablet=\"" . $parameters['melisPluginTabletWidth'] . "\" ";
        }
        // Something has been saved, let's generate an XML for DB
        $xmlValueFormatted = "\t" . '<' . $this->pluginXmlDbKey . ' id="' . $parameters['melisPluginId'] . '"' .$widthDesktop . $widthMobile . $widthTablet . '>' .
            $xmlValueFormatted .
            "\t" . '</' . $this->pluginXmlDbKey . '>' . "\n";
        return $xmlValueFormatted;
    }
}
}
