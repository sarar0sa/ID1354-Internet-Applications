<?php
namespace TastySite\View;

use Id1354fw\View\AbstractRequestHandler;

/**
 * Description of ShowPancakes
 *
 * @author sararosander
 */
class ShowCalendar extends AbstractRequestHandler {
  
    protected function doExecute() {
        return 'calendar';
    }

}