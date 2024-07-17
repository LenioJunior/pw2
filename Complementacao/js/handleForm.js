//var doc = document.getElementById("header");

var header = $("#header");

$(function() {
    console.log("Página Carregada!");
    $("#includedContent").load('pages/Home.html');
});

$(window).on("load", function(){
    console.log("window Carregada!");
});

function setAsActive(e){
    var active = $('.nav-link.active');
    console.log("Elemento Anterior Ativo: ", active[0].text);
    console.log("Elemento a Ativar: ", e.target.text);
    $(active[0]).removeClass("active");
    $(e.target).addClass("active");
}

// $(document).on("click", function(e){
//    console.log("Você clicou em algum lugar do documento!", e);
// });

$(header).on("click", function(e){
    setAsActive(e);
    // var pageName = e.target.text.toLowerCase();
    // //pageName = pageName[0].toUpperCase() + pageName.slice(1);
    // $("#includedContent").load('pages/' + pageName + '.php');
});


// $("#headerEl").find('a').on("click", function(e) {    
//     $("#headerEl").find('a').removeClass('active')
//     $(this).addClass('active');
//     var path = "pages/" + e.target.text + ".html"
//     console.log(path);
//     $("#includedContent").load(path);
// });

