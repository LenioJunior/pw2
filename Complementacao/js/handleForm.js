//var doc = document.getElementById("header");
var header = $("#header");

$(document).ready(function() {
    console.log("Página Carregada!");
  } );

$(document).on("click", header, function(e){
    console.log("Elemento Clicado: ", e.target.text);
    var active = $('.nav-link.active');
    console.log("Elemento Atualmente Ativo: ", active);
    $(active[0]).removeClass("active");
    $(e.target).addClass("active");
});

//console.log(doc);

