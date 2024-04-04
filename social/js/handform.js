var header = $("#pills-tab");

$(function() {
    console.log("Página Carregada!");
    $("#includedContent").load('Home.php');
});

$(header).on("click", function(e){
    //setAsActive(e);
    var pageName = e.target.textContent;
    $("#includedContent").load(pageName + '.php');
});