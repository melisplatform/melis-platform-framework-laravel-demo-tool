<?php

/**
 * Melis Technology (http://www.melistechnology.com)
 *
 * @copyright Copyright (c) 2017 Melis Technology (http://www.melistechnology.com)
 *
 */

namespace MelisPlatformFrameworkLaravelDemoTool\Controller;

use Laminas\View\Model\ViewModel;
use MelisCore\Controller\MelisAbstractActionController;

class IndexController extends MelisAbstractActionController
{
    /**
     * Render the view of the tool
     * @return ViewModel
     */
    public function renderToolAction()
    {
        $view = new ViewModel();

        /**
         * Using MelisPlatformService service from thhe Module MelisPlatformFrameworks,
         * the request to the Third Party Framework will handled and return as response content
         * by providing the Route of the request "/list" for example
         * and getting the response by calling the the getContent() method after
         */
        $thirdPartySrv = $this->getServiceManager()->get('MelisPlatformService');
        $thirdPartySrv->setRoute('/melis/laravel-list');
        $response = $thirdPartySrv->getContent();

        $view->content = $response;

        return $view;
    }

    /**
     * Modal view container
     * @return ViewModel
     */
    public function renderModalToolAction()
    {

        $view = new ViewModel();

        /**
         * Using MelisPlatformService service from thhe Module MelisPlatformFrameworks,
         * the request to the Third Party Framework will handled and return as response content
         * by providing the Route of the request "/list" for example
         * and getting the response by calling the the getContent() method after
         */
        // adding url parameter album id for update
        $albumId = $this->params()->fromQuery('albumId') ? '/'.$this->params()->fromQuery('albumId', null): '';
        $thirdPartySrv = $this->getServiceManager()->get('MelisPlatformService');
        $thirdPartySrv->setRoute('/melis/laravel-album-form'.$albumId);
        $response = $thirdPartySrv->getContent();

        $view->content = $response;

        return $view;
    }
}