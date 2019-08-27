<?php

/**
 * Melis Technology (http://www.melistechnology.com)
 *
 * @copyright Copyright (c) 2017 Melis Technology (http://www.melistechnology.com)
 *
 */

namespace MelisPlatformFrameworkLaravelDemoTool\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function renderToolAction()
    {
        $view = new ViewModel();

        $thirdPartySrv = $this->getServiceLocator()->get('MelisPlatformService');
        $thirdPartySrv->setRoute('/list');
        $response = $thirdPartySrv->getContent();

        $view->content = $response;

        return $view;
    }
}