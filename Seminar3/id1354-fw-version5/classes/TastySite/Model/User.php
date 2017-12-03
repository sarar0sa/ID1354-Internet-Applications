<?php

namespace TastySite\Model;
use TastySite\Integration\DB_Handler;

/**
 * Description of LoginUser
 *
 * @author sararosander
 */
class User {
    private $user;
            
    public function __construct() {
        $this->user = new DB_Handler();
    }
    
    public function checkLogin($username, $password){
        $result = $this->user->loginUser($username);
        if(mysqli_num_rows($result) < 1) {
            return false;
            }
            else{
                while($row = mysqli_fetch_assoc($result)){
                    if (password_verify($password, $row['password'])) {
                        return true;
                }
           
                else {
                    return false;
                }
            }
        }
    }
        
        public function checkRegister($username, $password){
            $result = $this->user->registerUser($username, $password);
            if($result){
                return true;
            }
            else{
                return false;
        }
    }
}
