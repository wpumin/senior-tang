
// ? Init WOW -------------------------------------------------
new WOW().init();

$(document).ready(function(){
    $('input:checkbox').prop('checked', false);

    $('.menu-icon').click(function(){
        $('.header-wrapper').toggleClass('header-max');
        $('.menu').toggleClass('header-max');
    });
    // (function($){
    //     $(window).on("load",function(){
    //         $("ul.menu").mCustomScrollbar();
    //     });
    // })(jQuery);
});

// ? Page Loaded ----------------------------------------------
$(document).ready(function (e) {
    $( "#loader" ).fadeOut( 2000, function() {
        myVar = setTimeout(showPage, 5000);
    });
});

function showPage() {
    document.getElementById("loader").style.display = "none";
    document.getElementById("myDiv").style.display = "block";
}

// ? To Top ---------------------------------------------------
$(document).ready(function(){ 
    $(window).scroll(function(){ 
        if ($(this).scrollTop() > 100) { 
            $('#scroll').fadeIn(); 
        } else { 
            $('#scroll').fadeOut(); 
        } 
    }); 
    $('#scroll').click(function(){ 
        $("html, body").animate({ scrollTop: 0 }, 800); 
        return false; 
    }); 
});