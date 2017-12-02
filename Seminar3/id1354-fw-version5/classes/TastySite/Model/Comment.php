<?php

namespace TastySite\Model;
use TastySite\Integration\DB_Handler;
/**
 * Description of Comment
 *
 * @author sararosander
 */
class Comment {
    private $comment;
    
    public function __construct() {
        $this->comment = new DB_Handler();
    }
    
    public function addComment($username ,$recipe, $comment){
        $result = $this->comment->insertComment($username, $recipe, $comment);
        if($result){
            return true;
        }
        return false;
    }
}
