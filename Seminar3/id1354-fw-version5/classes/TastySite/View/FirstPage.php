<?php

namespace TastySite\View;

use Id1354fw\View\AbstractRequestHandler;
/*
 * Shows the index page of the application
 */

class FirstPage extends AbstractRequestHandler {
    protected function doExecute() {
        return 'index';
    }

}
