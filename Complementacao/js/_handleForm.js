$( document ).ready(function() {
    //$("a").trigger("click");
    console.log("Loaded!");
    $("#includedContent").load('pages/Home.html');
});

$(document).on("click", "#btnLegal", function() {    
    $('#liveToast').toggle();
    console.log("alertPricing clicked!");
});

$("#headerEl").find('a').on("click", function(e) {    
    $("#headerEl").find('a').removeClass('active')
    $(this).addClass('active');
    var path = "pages/" + e.target.text + ".html"
    console.log(path);
    $("#includedContent").load(path);
});
