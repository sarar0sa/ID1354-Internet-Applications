$(document).ready(function(){
    
    $('button#submit').click(function (){
        var comment = $("#comment").val();
        var submit = 1;
        $.post("handle_comments.php", {
            comment: comment,
            submit: submit
            
        }, function(){
            reloadComments();
            $("#comment").val('');
            submit = 0;
            reloadComments();
             
        });
        console.log(comment + submit);
 
        //alert(comment);
    });
    
    $('button#delete').click(function (){
        var commentId = $("#comment_id").val();
        var user = $("#comment_name").val();
        //var recipe = $("#recipe").val();
        var deleteEntry = 1;
        $.post("handle_comments.php", {
            commentId: commentId,
            user: user,
            //recipe: recipe,
            deleteEntry: deleteEntry    
        }, function(){
            deleteEntry = 0;
        });
        console.log(commentId + user + deleteEntry);
    });
    
});

    function reloadComments() {
        var display = 1;
       $.post("handle_comments.php", {
           display: display
       }, 
       function(data){
           $(".comment-box").html(data);
       });
    }

   