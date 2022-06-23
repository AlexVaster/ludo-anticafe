$(window).scroll(function(){
    if ($(this).scrollTop() > 270) {
        $(".logo").addClass("logo_show");
    }
    else {
        $(".logo").removeClass("logo_show");
    }
    });