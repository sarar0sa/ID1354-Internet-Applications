<?php

include 'connect_DB.php';

 
 $username = $_POST['username'];
 $password = $_POST['password'];
 $id = $_SESSION['id'];
 
 $query= "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
 $result = mysqli_query($mysqli, $query);
 
 
 if(mysqli_num_rows($result) > 0){
     session_start();
     $_SESSION['id'] = $username;
    header("Location: loginSuccess.php");
    exit();
 }
 
 else {
     echo 'Invalid user';
}




