$(document).ready(function(){

    $(".gotop").hide();

    $(window).on("scroll", function() {

        if ($(this).scrollTop() > 100) {
         $('.gotop').slideDown("fast");
        } else {
            $('.gotop').slideUp("fast");
        }

        scrollHeight = $(document).height();
        scrollPosition = $(window).height() + $(window).scrollTop();
        footHeight = $("footer").innerHeight();

        if ( scrollHeight - scrollPosition  <= footHeight ) {
            $(".gotop").css({
                "position":"absolute",
                "bottom": footHeight
            });
        } else {
            $(".gotop").css({
                "position":"fixed",
                "bottom": "0px"
            });
        }
    });

    $('.gotop a').click(function () {
        $('body,html').animate({
        scrollTop: 0
        }, 500);
        return false;
     });
});