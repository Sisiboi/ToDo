$('.delete').on("click", deleteList);

function deleteList() {
    $.ajax({ 
            url: "deleteList.php",
            context: this,
            method: "POST",
            data: { listsId: $(this).data("post") }
            }).done(function() {
                    $(this).parents('.main').css('display', 'none');
                    window.location.replace("index.php");
    });
}


