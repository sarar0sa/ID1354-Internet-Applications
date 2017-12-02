<!DOCTYPE html>
<?php
include 'header.php';
?>
<head>
    <title>Login Form </title>
    </head>
    <body> 
        <form action="Login" method="POST">
            <div class="container">
                <p> Enter username and password to log in </p>
                <label>Username</label>
                <input type="text" placeholder="Enter username" name ="username" required>
                <br>
                <br>
                <label> Password </label>
                <input type="password" placeholder="Enter password" name="password" required>
                <br><br>
                <button type="submit">Login</button>
                </div>
                </form>
                <form action="ShowRegister">
                <div class="container">
                <button type="submit">Register new member</button>
                <br><br>
                </div>
                </form>
    </body>
</html>

