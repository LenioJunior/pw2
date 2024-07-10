var btn = $('button[id^="btnComentario"]')

$(btn).on("click", function(e){
    var postId = $(e.target).data('post');
    console.log('Post Id: ' + postId);
    $('#divComentario-' + postId).append()
});