<!DOCTYPE html>
<?php session_start(); ?>
<html>
    <head>
        <title>Comments</title>
    </head>
    <body>
        <div class='comments'>
        <hr>
        <h4>Comments</h4>
        <hr>
        <?php if(isset($_SESSION['id'])){ ?>
        <form action="handle_comments.php" method="POST">
            <div class="comment-container">
                <label>Comment</label>
                <br>
                <textarea name="comment" placeholder="Enter your comment" required></textarea>
                <input type="hidden" name="recipe" value="meatballs">
                <br><br>
                <button type="submit" name='submit'>Add comment</button>  
            </div>
        <?php } ?>
        </form>
        <br>    
        </div>
        <?php
        include 'connect_DB.php';
        $sqlget = "SELECT user, comment, recipe FROM comments WHERE recipe = 'meatballs'";
        $resultcom = mysqli_query($mysqli, $sqlget);
        if(mysqli_num_rows($resultcom) > 0){
            while($row = mysqli_fetch_assoc($resultcom)){
                echo $row["user"] . "<br>" . $row["comment"] . "<br>";
            }
        }
        else{
            echo "no comments yet!";
        }
        ?>
    </body>
</html>


