/* Implement custom javascript here */
jQuery(document).ready(function () {
    jQuery(".c-hamburger").click(function () {
        jQuery('#mobil-navigation').toggleClass('open');
        jQuery('.c-hamburger').toggleClass('is-active');
    });

    jQuery(".scroll-top").click(function () {
        jQuery("html, body").animate({
            scrollTop: 0
        }, "slow");
        return false;

    });

    var offset = 120;
    var duration = 500;

    jQuery('.scroll-top').hide();

    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > offset) {
            jQuery('.scroll-top').fadeIn(duration);
        } else {
            jQuery('.scroll-top').fadeOut(duration);
        }
    });
    // Dödar expanded länkarna så att man kan öppna undernavigeringen
    jQuery('.mobil-nav .expanded a').click(function () {

        if (jQuery(this).next().is('ul')) {
            jQuery(this).next().slideToggle();
            return false;
        }

    });
    // timer
    var interval = 1;

    setInterval(function () {
        if (interval == 33325) {
            jQuery('#mobil-navigation').removeClass('open');
            jQuery('.c-hamburger').removeClass('is-active');
            interval = 1;
        }
        interval = interval + 1;
        //console.log(interval);
    }, 1000);


    //    jQuery(this).find('#edit-field-art-und-actions-ief-add').text('Lägg till art');
    //    jQuery(this).find('#edit-field-art-und-form-actions-ief-add-save--2').text('Lägg till art');

});
