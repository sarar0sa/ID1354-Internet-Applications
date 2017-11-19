<?php
session_start();
include_once 'header.php';?>
<!DOCTYPE html>
<html>
    <head>
        <title>Registrer</title>
    </head>
    <body>
        <form action="register.php" method="POST">
            <div class="container">
                <p> Enter a password and an username to register a new member </p>
                <label>Username</label>
                <input type="text" placeholder="Enter username" name ="username" required>
                <br>
                <br>
                <label> Password </label>
                <input type="password" placeholder="Enter password" name="password" required>
                <br><br>
                <button type="submit" name="register">Register</button>
                </div>
                </form>
    </body>
</html>

