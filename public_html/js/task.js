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


function markTask(event){
       
        var taskid = $(this).data(taskid)['taskid'];
        var mark = 1;
        if($(this).parent().parent().hasClass('table-active')){
                mark = 0;
            }

                 console.log(mark);
        $.ajax({
                url: "markTask.php",
                context: this,
                method: "POST",
                data: { taskid: taskid, mark: mark }
                }).done(function() {



                $(this).toggleClass('btn-danger btn-success');
                  $(this).parent().parent().toggleClass('table-active table-default');
                 
                  if(mark == 1){
                      $(this).html('mark as todo');
                      $(this).parent().hasClass('deadline').fadeOut();
                      
                  } else {
                      $(this).html('mark as done');
                  }
                       
                       
                        
                       
                        
            });
            event.preventDefault();


        }
        $('.mark').on('click', markTask);


    