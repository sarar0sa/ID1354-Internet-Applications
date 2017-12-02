<?php

namespace TastySite\View;
use Id1354fw\View\AbstractRequestHandler;
use TastySite\Util\Constants;

/**
 * Login the user
 *
 * @author sararosander
 */

class Login extends AbstractRequestHandler {
    private $username, $password;
    
    public function setUsername($username){
        $this->username = $username;
    }
    
    public function setPassword($password){
         $this->password = $password;
    }
    
    protected function doExecute() {
        $controller = $this->session->get(Constants::CONTR_KEY_NAME);
        $this->session->set(Constants::CONTR_KEY_NAME, $controller);
        
        $checkingLogin = $controller->login($this->username, $this->password);
        if($checkingLogin){
            $this->session->set(Constants::CONTR_KEY_NAME, $controller);
            $this->session->set(Constants::LOGGED_IN_USER, $this->username);
            return 'loginSuccess';
        }
        else{
            echo 'Invalid password or username, try again';
        }
    }

}
