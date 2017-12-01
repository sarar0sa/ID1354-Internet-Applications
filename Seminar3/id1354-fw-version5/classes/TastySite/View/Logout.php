<?php

namespace TastySite\View;
use Id1354fw\View\AbstractRequestHandler;
use TastySite\Util\Constants;

/**
 * Description of Logout
 *
 * @author sararosander
 */
class Logout extends AbstractRequestHandler {
    
    protected function doExecute() {
       $this->session->set(Constants::LOGGED_IN_USER, null);
       return 'index';
    }

}
