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
    
    public function setLogin(){
        //vafan vill den ha den här för?
    }

    protected function doExecute() {
        echo 'helooooo';
        $controller = $this->session->get(Constants::CONTROLLER_KEY_NAME);
        echo 'thjing';
        $checkingLogin = $controller->login($this->username, $this->password);
        echo $checkingLogin;
        echo $controller;
        if($checkingLogin){
            echo 'in success';
            $this->session->set(Constants::CONTROLLER_KEY_NAME, $controller);
            $this->session->set(Constants::LOGGED_IN_USER, $this->username);
            return 'loginSuccess';
        }
        else{
            echo 'in fail';
            return 'LoginFolder';
        }
    }

}
