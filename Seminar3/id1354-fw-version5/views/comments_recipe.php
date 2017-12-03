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
        <?php if($this->session->get(Constants::LOGGED_IN_USER) != null){  ?>
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
        if(count($theComments) > 0){
            foreach ($theComments as $comment) {
                echo '<br>';
                echo '<h3>'.$comment['user'].'</h3>';
                echo '<p>'.$comment['comment'].'</p>';
                if($this->session->get(Constants::LOGGED_IN_USER) == $comment['user']) { ?>
                    <div class="commentDelete">
                    <form action="DeleteComments" method="POST">
                    <?php echo "<input type='hidden' name='comment_id' value='".$comment['id']."'/>";?>
                    <?php echo "<input type='hidden' name='comment_name' value='".$comment['user']."'/>";?> 
                    <button type="submit"> Delete comment</button>
                    <br>
                    </form>
                    </div>
                <?php
                }
            }
        }
            
        else {
            echo '<p>No comments yet, be the first one!</p>';
            echo '<br><br>';
        }
            
        ?>
        </div> 
    </body>
</html>


