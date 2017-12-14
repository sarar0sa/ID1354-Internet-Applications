<?php
session_start();
include 'includes/connect_DB.php';
include 'header.php';
$name = $_SESSION['id'];
$recipe = $_SESSION['recipe'];

    if($_POST["submit"]){
        $comment = $_POST["comment"];
        $querycomment = "INSERT INTO comments (recipe, user, comment) VALUES ('$recipe','$name','$comment')";
        mysqli_query($mysqli, $querycomment);
            
    }
        
    if($_POST["deleteEntry"]){
        $recID = $_POST["commentId"];
        $querydelete = "DELETE FROM comments WHERE id = '$recID' AND recipe = '$recipe'";
        mysqli_query($mysqli, $querydelete);
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
                echo "<button onclick=remove(" . $row['id'] .")>". "Delete". "</button></div>" ;
                
            }
        }       
      }
