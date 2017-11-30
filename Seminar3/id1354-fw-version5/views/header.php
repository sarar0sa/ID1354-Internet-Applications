<!DOCTYPE html>
<?php 
session_start();
?>
<html lang="en-US">
    <head>
        <title>Header</title>
        <link rel="stylesheet" type="text/css" href="/Seminar3/id1354-fw-version5/resources/css/resetcss.css">
        <link rel="stylesheet" type="text/css" href="/Seminar3/id1354-fw-version5/resources/css/MyStyle.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class ="header">
            <a href="/Seminar3/id1354-fw-version5/views/index.php">Tasty Recipes</a>
        </div>
        <div class="navbar">
        <ul>
            <li><a href="FirstPage">Home</a></li>
            <li><a href="/Seminar3/id1354-fw-version5/views/calendar.php">Calendar</a></li>
            <li class ="dropdown">
                <a href="#" class="dropbtn">Recipes</a>
                <div class="dropdown-content">
                    <a href="/Seminar3/id1354-fw-version5/views/Meatballs.php">Meatballs</a>
                    <a href="/Seminar3/id1354-fw-version5/views/Pancakes.php">Pancakes</a>
                </div>
            </li>
            <?php if(isset($_SESSION['id'])){ ?>
            <li><a href="logout.php"> Log out </a></li>
            <?php } else { ?>
            <li><a href="/Seminar3/id1354-fw-version5/views/LoginFolder.php"> Log in </a></li>
            <?php } ?>
        </ul>
        </div>