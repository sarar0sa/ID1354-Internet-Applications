<?php

namespace TastySite\Controller;

use TastySite\Model\LoginUser;

/**
 * All calls to Model passes through here
 *
 * @author sararosander
 */
class Controller {
    private $login;
    
    public function login($username, $password){
        $this->login = new LoginUser();
        return $this->login->checkLogin($username, $password);
    }
    
}
