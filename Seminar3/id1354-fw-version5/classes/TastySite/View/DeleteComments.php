<?php
namespace TastySite\View;

use Id1354fw\View\AbstractRequestHandler;
use TastySite\Util\Constants;

/**
 * Description of DeleteComments
 *
 * @author sararosander
 */
class DeleteComments extends AbstractRequestHandler {
    private $comment_id, $comment_name;
    
    public function setComment_id($comment_id){
        $this->comment_id = htmlentities($comment_id, ENT_QUOTES);
    }
    
    public function setComment_name($comment_name){
        $this->comment_name = htmlentities($comment_name, ENT_QUOTES);;
    }
    

    protected function doExecute(){
        $controller = $this->session->get(Constants::CONTR_KEY_NAME);
        $this->session->set(Constants::CONTR_KEY_NAME, $controller);
        
        $recipe = $this->session->get(Constants::RECIPE);
        $loggedInUser = $this->session->get(Constants::LOGGED_IN_USER);
        echo $recipe;
        echo $this->comment_id;
        echo $this->comment_name;    
        $checkDelete = $controller->deleteComment($this->comment_id, $this->comment_name, $recipe, $loggedInUser);
        $getComments = $controller->readComments($recipe);
        
        $this->addVariable('theComments', $getComments);
        
        if($checkDelete){
            return $recipe;
        }
        
        else{
            echo 'You are not the user of this comment, you cant delete it';
        }  
    }
}
