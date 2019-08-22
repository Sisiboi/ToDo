function makeAdmin(event) {
    var userid = $(this).data(userid)['userid'];
    var admin = 1;
    if($(this).parent().parent().hasClass('isAdmin')){
        admin = 0;
    }
    $.ajax({
        url: "adminEdit.php",
        context: this,
        method: "POST",
        data: { user: userid, admin: admin }
        }).done(function(res) {
            $(this).fadeIn().fadeOut().fadeIn();
            $(this).parent().parent().toggleClass('isAdmin');
            if(admin == 1){
                $(this).html('Remove Admin');
            } else {
                $(this).html('Make Admin');
            }
    });
    event.preventDefault();
}









function deleteAccount(event) {
    var userid = $(this).data(userid)['userid'];
    var del = 1;
    if($(this).parent().parent().hasClass('deleted')){
        del = 0;
        console.log(5);
    }
    $.ajax({
        url: "adminEdit.php",
        context: this,
        method: "POST",
        data: { user: userid, del: del }
        }).done(function(res) {
            $(this).fadeIn().fadeOut().fadeIn();
            $(this).parent().parent().toggleClass('deleted');
            if(del == 1){
                $(this).html('recover');
            } else {
                $(this).html('delete');
            }
    });
    event.preventDefault();
}






$('.delete').on('click', deleteAccount);
$('.isAdmin').on('click', makeAdmin);

