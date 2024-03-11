//var doc = document.getElementById("header");
var header = $("#header");

$(document).ready(function() {
    console.log("Página Carregada!");
    $("#includedContent").load('pages/Home1.html');
});

function setAsActive(e){
    console.log("Elemento Clicado: ", e.target.text);
    var active = $('.nav-link.active');
    console.log("Elemento Atualmente Ativo: ", active);
    $(active[0]).removeClass("active");
    $(e.target).addClass("active");
}

$(document).on("click", header, function(e){
    setAsActive(e);
    var pageName = e.target.text;
    $("#includedContent").load('pages/' + pageName + '1.html');

});

//console.log(doc);

