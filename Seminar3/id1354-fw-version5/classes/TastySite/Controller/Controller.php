<?php

namespace TastySite\Controller;

use TastySite\Model\User;

/**
 * All calls to Model passes through here
 *
 * @author sararosander
 */
class Controller {
    private $user;
    
    public function login($username, $password){
        $this->user = new User();
        return $this->user->checkLogin($username, $password);
    }
    
    public function register($username, $password){
        $this->user = new User();
        return $this->user->checkRegister($username, $password);
    }
    
}
