// Add your custom JS here.
jQuery(document).ready(function(){

    jQuery(".getin-touch-btn").click(function(e) {
        e.preventDefault();
        jQuery('html, body').animate({
            scrollTop: jQuery("#contact").offset().top
        }, 800);
    });

    jQuery(".down-arrow-btn").click(function(e) {
        e.preventDefault();
        jQuery('html, body').animate({
            scrollTop: jQuery("#services").offset().top
        }, 800);
    });



});
