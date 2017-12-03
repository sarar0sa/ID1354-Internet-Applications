<?php

namespace TastySite\View;
use Id1354fw\View\AbstractRequestHandler;
use TastySite\Util\Constants;

/**
 * Description of Register
 *
 * @author sararosander
 */
class Register extends AbstractRequestHandler {
    private $username, $password;
    
    public function setUsername($username){
        $this->username = htmlentities($username, ENT_QUOTES);
    }
    
    public function setPassword($password){
         $this->password = htmlentities($password, ENT_QUOTES);
    }
    
    protected function doExecute(){
        $controller = $this->session->get(Constants::CONTR_KEY_NAME);
        $checkingRegister = $controller->register($this->username, $this->password);
       
        if($checkingRegister){
            return 'registerSuccess';
        }
        echo 'Something went wrong, try again';
        
    }

}
