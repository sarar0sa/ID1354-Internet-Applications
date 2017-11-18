<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include 'header.php';
session_start();
?>

<html lang="en-US">
    <head>
        <title>Index Page</title>
    </head>
    <body>
        <br>
        <br>
        <div class="welcome">
            <h4>Welcome!</h4> 
        <p> Here you will find tasty recipes and a calender which is showing 
            what meal you should cook on which day. <br> All this will help 
            you plan your meals during the week. Check out the recipe of the day 
            by clicking below!    
        </p> 
        <a href="calendar.php">
        <img id="index-page" src="pictures/cook-366875_1280.jpg" alt="Plates with diffrent food">
        <div class="link-text">Recipe of the day</div>
        </a>
        </div>
    </body>
</html>