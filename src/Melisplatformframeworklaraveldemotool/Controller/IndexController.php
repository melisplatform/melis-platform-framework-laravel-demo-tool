<?php

/**
 * Melis Technology (http://www.melistechnology.com)
 *
 * @copyright Copyright (c) 2017 Melis Technology (http://www.melistechnology.com)
 *
 */

namespace Melisplatformframeworklaraveldemotool\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function renderTool1Action()
    {
        $view = new ViewModel();

        $thirdPartySrv = $this->getServiceLocator()->get('MelisPlatformService');
        $thirdPartySrv->setRoute('/list-1');
        $response = $thirdPartySrv->getContent();

        $view->content = $response;

        return $view;
    }

    public function renderTool2Action()
    {
        $view = new ViewModel();

        $thirdPartySrv = $this->getServiceLocator()->get('MelisPlatformService');
        $thirdPartySrv->setRoute('/list-2');
        $response = $thirdPartySrv->getContent();

        $view->content = $response;

        return $view;
    }
}