<?php

namespace TastySite\View;

use Id1354fw\View\AbstractRequestHandler;
use TastySite\Util\Constants;
use TastySite\Controller\Controller;
/**
 * All requests without a url matching an existing request will be redirected
 * to the applications index page.
 */
class DefaultRequestHandler extends AbstractRequestHandler {
    protected function doExecute(){
        $this->session->restart();
        $this->session->set(Constants::CONTR_KEY_NAME, new Controller());
        \Header('Location: /Seminar3/id1354-fw-version5/TastySite/View/FirstPage');
    }
}
