<?php
include 'connect_DB.php';

if(isset($_POST['register'])){
    session_start();
     $username = $_POST['username'];
     $password = $_POST['password'];
     $query= "INSERT INTO users (username,password) VALUES ('$username','$password')";
     $result = mysqli_query($mysqli, $query);
     
     if($result == true){
         header("Location: registerSuccess.php");
     }
     
     else{
         echo 'Something went wrong, please try på register again';
     }
}