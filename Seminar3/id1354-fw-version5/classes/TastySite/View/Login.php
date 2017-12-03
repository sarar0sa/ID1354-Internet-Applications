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
        $this->username = htmlentities($username, ENT_QUOTES);
    }
    
    public function setPassword($password){
         $this->password = htmlentities($password, ENT_QUOTES);
    }
        
    
    protected function doExecute() {
        $controller = $this->session->get(Constants::CONTR_KEY_NAME);
        $this->session->set(Constants::CONTR_KEY_NAME, $controller);
        
        if((ctype_print($this->username)) && (ctype_print($this->password))){
            $checkingLogin = $controller->login($this->username, $this->password);
        }
        
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

