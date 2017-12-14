<!DOCTYPE html>
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
            <div class="comment-container">
                <label>Comment</label>
                <br>
                <textarea id="comment"  name='comment' placeholder="Enter your comment" required></textarea>
                <br><br>
                <button type="submit" id='submit'>Add comment</button>  
            </div>
        <?php }  else{ ?>
            <br>
            <p>Log in to write a comment</p>
        <?php } ?>
        <br>
        
        <div class="comment-box">
            <script>reloadComments();</script>
        </div>
        </div> 
        
    </body>
</html>


