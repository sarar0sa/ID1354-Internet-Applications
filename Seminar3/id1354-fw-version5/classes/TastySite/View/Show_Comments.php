<?php

namespace TastySite\View;

use Id1354fw\View\AbstractRequestHandler;

/**
 * Description of Show_Comments
 *
 * @author sararosander
 */
class Show_Comments extends AbstractRequestHandler {
    private $theComments;
    
    public function setComment($theComments){
        $this->theComments = $theComments;
    }
    protected function doExecute(): string {
        $this->addVariable('theComments', $this->theComments);
        return 'subfolder/view-data';
    }

}
