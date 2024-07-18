$('#exampleModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var idProduto = button.data('idproduto');
    var nomeProduto = button.data('nomeproduto');

    var modal = $(this)
    modal.find('.modal-body').text('Confirma a exclusão do produto \'' + idProduto + ' - ' + nomeProduto + '\'?')
    modal.find('.modal-body input').val(nomeProduto)

    $('#confirmButtom').on("click", function(e){        
        $(this).off( "click");
        $('#exampleModal').modal('hide');
        window.location.replace('crud.php?action=excluir&id='+ idProduto + '&nome='+ nomeProduto);
    });
})

var alert = $(".alert");
if(alert){
    console.log(alert);
    alert.alert();
}

