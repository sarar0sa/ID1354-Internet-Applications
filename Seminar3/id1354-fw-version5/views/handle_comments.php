<?php
session_start();
//$recipe = $_SESSION['recipe'];
include 'connect_DB.php';
$name = $_SESSION['id'];

    if(isset($_POST['submit'])){
        $comment = $_POST['comment'];
        $recipe =$_POST['recipe'];
        $url = $recipe.".php";
        $querycomment = "INSERT INTO comments (recipe, user, comment) VALUES ('$recipe','$name','$comment')";
        $resultcomment = mysqli_query($mysqli, $querycomment);
        }
        
    if($resultcomment == true){
        header("Location: $url");
        }   
    
    if(isset($_POST['delete'])){
        $recID = $_POST['comment_id'];
        $recipe = $_POST['recipe'];
        $url = $recipe.".php";
        if($name == $_POST['comment_name']){
        $querydelete = "DELETE FROM comments WHERE id = $recID";
        $resultdelete = mysqli_query($mysqli, $querydelete);
        }
        
        else{
            echo "You're not the owner of this comment, you can't delete it";
        }
    
        if($resultdelete == true){
            header("Location: $url");
            }
            
            else{
            echo 'Something went wrong, we could not delete your comment, '
            . 'try again!';
            }
        }

