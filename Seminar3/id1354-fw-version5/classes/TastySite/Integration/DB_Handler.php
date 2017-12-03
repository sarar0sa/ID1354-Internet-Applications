<?php

namespace TastySite\Integration;

 class DB_Handler{
     private $conn;
     
     public function __construct(){
         $DB_USERNAME = 'root';
         $DB_PASSWORD = 'root';
         $DB_HOST = 'localhost';
         $DB_DATABASE = 'login_tasty';
        
        ///include '/Applications/MAMP/htdocs/DB_connect';
  
         $this->conn = mysqli_connect($DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_DATABASE);
         
           if (mysqli_connect_error()) {
           die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
            }
     }
     
     public function loginUser($username){
         $query=$this->conn->prepare("SELECT password FROM users WHERE username = ? ");
         $query->bind_param(s, $username);
         $query->execute(); 
         $result = $query->get_result();
         return $result;
     }
     
     public function registerUser($username, $password){
         $query = $this->conn->prepare("INSERT INTO users (username,password) VALUES (?,?)");
         $hashPassword = password_hash($password, PASSWORD_DEFAULT);
         $query->bind_param(ss, $username, $hashPassword);
          //$result = mysqli_query($this->conn, $query);
         //$result = $query->get_result();
         return $query->execute();
     }
     
     public function insertComment($username, $recipe, $comment){
         $query =$this->conn->prepare("INSERT INTO comments (recipe, user, comment) VALUES (?, ?, ?)");
         $query->bind_param(sss, $recipe, $username, $comment);
         //$result = mysqli_query($this->conn, $query);
         return $query->execute();
     }
     
     public function getAllComments($recipe){
       $query = $this->conn->prepare("SELECT * FROM comments WHERE recipe =?");
       $query->bind_param(s,$recipe);
       $query->execute();
       $result =$query->get_result();    
       //$result = mysqli_query($this->conn, $query);
       return $result;
     }
     
     public function deleteComment($comment_id, $comment_user, $comment_recipe, $loggedInUser){
         if($comment_user == $loggedInUser){     
             $query =$this->conn->prepare("DELETE FROM comments WHERE id =? AND user =? AND recipe =? ");
             $query->bind_param(sss, $comment_id, $comment_user, $comment_recipe);
             //$result = mysqli_query($this->conn, $query);
             return  $query->execute();
         }
         else {
             return false;
         }
     }

 }