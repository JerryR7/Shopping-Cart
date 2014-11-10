// <!-- GoTop Start-->
$(function(){
    $("#gotop").click(function(){
        jQuery("html,body").animate({
            scrollTop:0
        },1000);
    });
    $("#search_bottom").click(function(){
        jQuery("html,body").animate({
            scrollTop:0
        },1000);
        $("#search").trigger("focus");
    });
    $(window).scroll(function() {
        if ( $(this).scrollTop() > 300){
            $('#gotop').fadeIn("fast");
        } else {
            $('#gotop').stop().fadeOut("fast");
        }
    });
});
// <!-- GoTop End-->

