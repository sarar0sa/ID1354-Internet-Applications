<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Header</title>
        <link rel="stylesheet" type="text/css" href="resources/css/resetcss.css">
        <link rel="stylesheet" type="text/css" href="resources/css/MyStyle.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript" src="resources/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script type="text/javascript" src="resources/js/comments.js"></script>
    </head>
    <body>
        <div class ="header">
        <a href="index.php">Tasty Recipes</a>
        </div>
        <div class="navbar">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="calendar.php">Calendar</a></li>
            <li class ="dropdown">
                <a href="#" class="dropbtn">Recipes</a>
                <div class="dropdown-content">
                    <a href="Meatballs.php">Meatballs</a>
                    <a href="Pancakes.php">Pancakes</a>
                </div>
            </li>
            <?php if(isset($_SESSION['id'])){ ?>
            <li><a href="logout.php"> Log out </a></li>
            <?php } else { ?>
            <li><a href="LoginFolder.php"> Log in </a></li>
            <?php } ?>
        </ul>
        </div>