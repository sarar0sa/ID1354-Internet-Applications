<!DOCTYPE html>
<?php
session_start();
?>

<html lang="en-US">
    <head>
        <title>Header</title>
        <link rel="stylesheet" type="text/css" href="resetcss.css">
        <link rel="stylesheet" type="text/css" href="MyStyle.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <?php if(isset($_POST['id'])){ ?>
            <li><a href="LoginFolder.php"> Log out </a></li>
            <?php } else { ?>
            <li><a href="LoginFolder.php"> Log in </a></li>
            <?php } ?>
        </ul>
        </div>