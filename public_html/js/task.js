$('.add-comment-area').keypress(function(e) {
        
  
        if(e.which == 13) {
                console.log("test");
            $.ajax({
                url: "addComment.php",
                context: this,
                method: "POST",
                data: { comment: $(this).val(), taskId: $(this).data("post") },
                success: function(data) {
                        var parent = $(this).parent().parent().find('.loadcomment');
                       
                                parent.append('<div class="comment"><p><strong>'+ data + ':</strong> ' + $(this).val() + '</p></div>');
                               
                        
                        $(this).val('');
                }
              
                
                
                });
    e.preventDefault();
        }
});