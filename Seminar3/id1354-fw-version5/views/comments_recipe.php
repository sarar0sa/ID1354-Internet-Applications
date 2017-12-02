<!DOCTYPE html>
<?php 
use TastySite\Util\Constants;
?>
<html>
    <head>
        <title>Comments</title>
    </head>
    <body>
        <div class='comments'>
        <hr>
        <h4>Comments</h4>
        <hr>
        <?php if($this->session->get(Constants::LOGGED_IN_USER) != null){ ?>
        <form action="HandleComments" method="POST">
            <div class="comment-container">
                <label>Comment</label>
                <br>
                <textarea name="comment" placeholder="Enter your comment" required></textarea>
                <br><br>
                <button type="submit">Add comment</button>  
            </div>
        <?php }  else{ ?>
            <br>
            <p>Log in to write a comment</p>
        <?php } ?>
        </form>
        <br>
        
        <?php
        include 'connect_DB.php';
        $sqlget = "SELECT * FROM comments WHERE recipe = 'Meatballs'";
        $resultcom = mysqli_query($mysqli, $sqlget);
        if(mysqli_num_rows($resultcom) > 0){
            while($row = mysqli_fetch_assoc($resultcom)){
                echo '<br>';
                echo '<h3>'.$row['user'].'</h3>';
                echo '<p>'.$row['comment'].'</p>';
                $recID = $row['id'];
                if($_SESSION['id'] == $row['user']){?>
                    <div class="commentDelete">
                    <form action="handle_comments.php" method="POST">
                    <?php echo "<input type='hidden' name='comment_id' value='".$row['id']."'/>";?>
                    <?php echo "<input type='hidden' name='comment_name' value='".$row['user']."'/>";?> 
                    <input type="hidden" name="recipe" value="Meatballs">
                    <button type="submit" name ='delete'> Delete comment</button>
                    <br>
                    </form>
                    </div>
                <?php    
                }
            }
            echo '<br>';   
        }
        else{
            echo '<p>No comments yet, be the first one!</p>';
            echo '<br><br>';
        }
        ?>
        </div> 
    </body>
</html>


