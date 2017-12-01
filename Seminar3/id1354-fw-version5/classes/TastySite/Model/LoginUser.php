<?php

namespace TastySite\Model;
use TastySite\Integration\DB_Handler;

/**
 * Description of LoginUser
 *
 * @author sararosander
 */
class LoginUser {
    private $user;
            
    public function __construct() {
        $this->user = new DB_Handler();
    }
    
    public function checkLogin($username, $password){
        $result = $this->user->loginUser($username, $password);
        if(mysqli_num_rows($result) > 0){
            return true;
            }
            else{
                return false;
            }
        }
    }
