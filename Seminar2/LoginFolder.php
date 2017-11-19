<!DOCTYPE html>
<?php
include_once 'header.php';
session_start();
?>
<head>
    <title>Login Form </title>
    </head>
    <body> 
        <form action="login.php" method="POST">
            <div class="container">
                <p> Enter username and password to log in </p>
                <label>Username</label>
                <input type="text" placeholder="Enter username" name ="username" required>
                <br>
                <br>
                <label> Password </label>
                <input type="password" placeholder="Enter password" name="password" required>
                <br> <br>
                <button type="submit">Login</button>
            </div>
        </form>
    </body>
</html>

