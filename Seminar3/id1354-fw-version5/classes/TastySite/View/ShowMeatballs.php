<?php
namespace TastySite\View;

use Id1354fw\View\AbstractRequestHandler;
use TastySite\Util\Constants;
/**
 * Description of ShowPancakes
 *
 * @author sararosander
 */
class ShowMeatballs extends AbstractRequestHandler {
    protected function doExecute() {
        $controller = $this->session->get(Constants::CONTR_KEY_NAME);
        $this->session->set(Constants::CONTR_KEY_NAME, $controller);
        $this->session->set(Constants::RECIPE, 'Meatballs');
        
        $allComments = $controller->readComments($this->session->get(Constants::RECIPE));
     
        $this->addVariable("theComments", $allComments);
        
        return 'Meatballs';
    }

}