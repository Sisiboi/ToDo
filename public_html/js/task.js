$('.add-comment-area').keypress(function(e) {
        
  
        if(e.which == 13) {
                console.log("neger");
            $.ajax({
                url: "addComment.php",
                context: this,
                method: "POST",
                data: { comment: $(this).val(), taskId: $(this).data("post") },
                
                
                });
    e.preventDefault();
        }
});