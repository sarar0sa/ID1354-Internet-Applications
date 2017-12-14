<?php
session_start();
include 'includes/connect_DB.php';
$name = $_SESSION['id'];
$recipe = $_SESSION['recipe'];

    if($_POST["submit"]){
        $comment = $_POST["comment"];
        //$recipe1 = $_POST["recipe"];
        $querycomment = "INSERT INTO comments (recipe, user, comment) VALUES ('$recipe','$name','$comment')";
        $resultcomment = mysqli_query($mysqli, $querycomment);
            
    }
        
    if(isset($_POST["deleteEntry"])){
        $recID = $_POST["commentId"];
        if($name == $_POST["user"]){
        $querydelete = "DELETE FROM comments WHERE id = '$recID' AND recipe = '$recipe' AND user = '$name'";
        $resultdelete = mysqli_query($mysqli, $querydelete);
        }
  
        else{
            echo "You're not the owner of this comment, you can't delete it";
        }   
    }
    
    if($_POST["display"]){ 
        $queryget = "SELECT * FROM comments WHERE recipe = '$recipe'";
        $result = mysqli_query($mysqli, $queryget);
     
        while($row = mysqli_fetch_assoc($result))
        {
                echo '<br>';
                echo '<h3>'.$row['user'].'</h3>';
                echo '<p>'.$row['comment'].'</p>'; 
                
               if($row['user'] == $name){
                   
                echo '<div class="commentDelete">';
                echo "<input type='hidden' id ='comment_id' name ='comment_id' value='".$row['id']."'/>";
                echo "<input type='hidden' id ='comment_name' name ='comment_name' value='".$row['user']."'/>";
                echo "<button type='submit' id ='delete'>"."Delete comment"."</button></div>"; 
                
            }
        }       
      }
