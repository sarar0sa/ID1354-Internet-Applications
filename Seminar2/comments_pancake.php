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
                <input type="hidden" name="recipe" value="pancakes">
                <br><br>
                <button type="submit" name='submit'>Add comment</button>  
            </div>
        <?php } ?>
        </form>
        <br>
        </div> 
    </body>
</html>


