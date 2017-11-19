<?php
session_start();
//$recipe = $_SESSION['recipe'];
include 'connect_DB.php';
$name = $_SESSION['id'];
//$url = $recipe.".php";

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
    


