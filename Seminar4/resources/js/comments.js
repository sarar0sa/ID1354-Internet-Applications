$(document).ready(function(){
    
    $('button#submit').click(function (){
        var comment = $("#comment").val();
        if(comment === ''){
           alert("You need to enter a comment");
           return;
        }
        else{
        var submit = true;
        $.post("handle_comments.php", {
            comment: comment,
            submit: submit
            
        }, function(){
            reloadComments();
            $("#comment").val('');
            submit = false;
             
        });
    }
     
    });
    
   /* $("body").on("click",("button#delete"), function (){
        var commentId = $("#comment_id").val();
        var user = $("#comment_name").val();
        var deleteEntry = true;
        $.post("handle_comments.php", {
            commentId: commentId,
            user: user,
            deleteEntry: deleteEntry    
        }, function(){
            reloadComments();
            deleteEntry = false;
        });

    });*/
    
});

    function reloadComments() {
        var display = true;
       $.post("handle_comments.php", {
           display: display
       }, 
       function(data){
           $(".comment-box").html(data);
           display = false;
       });
    }
 
    function remove(commentId){
        var deleteEntry = true;
       $.post("handle_comments.php", {
            commentId: commentId,
            deleteEntry: deleteEntry    
        }, function(){
            reloadComments();
            deleteEntry = false;
        });
    
}
   