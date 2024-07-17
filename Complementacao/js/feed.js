var btn = $('button[id^="btnComentario"]')

$(btn).on("click", function(e){
    var postId = $(e.target).data('post');
    console.log('Post Id: ' + postId);
    $('#divComentario-' + postId).append()
});

var btnCarregarComentario = $('button[id^="btnCarregarComentario"]')
$(btnCarregarComentario).on("click", function(e){
    var postId = $(e.target).data('post');
    console.log('Estou carregando os comentários: ' + postId);
    
    $.ajax({
        url: 'getComentarios.php?idPai=' + postId,
        type: 'get',
        data: { "callFunc1": "1"},
        success: function(response) { 
            //alert('response');
            $("#divComentario-46").append('<div class="col-8"><div class="post-header col align-self-start"><div class="profile-pic"></div><div class="card-body"><h5 class="card-title"> User Comment</h5><p class="card-text"></p></div></div>');

        }
    });
    
    $('#divComentario-' + postId).append()
});


setInterval(

    // function(){  
    //      $("#divComentario-46").append('<div class="col-8"><div class="post-header col align-self-start"><div class="profile-pic"></div><div class="card-body"><h5 class="card-title"> User Comment</h5><p class="card-text"></p></div></div>');
    // },
    // 5000  /* 10000 ms = 10 sec */

);