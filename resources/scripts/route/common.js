(function($) {

    jQuery.getScript('https://cdnjs.cloudflare.com/ajax/libs/jquery-smooth-scroll/2.2.0/jquery.smooth-scroll.min.js', function() {        
        jQuery( "#skipToLink" ).on( "click", function() {
            jQuery.smoothScroll({
                scrollTarget: '#Contents',
                offset: -80,
                speed: 1000
            });
        });
        jQuery('#skipToLink').trigger('click');

        var reSmooth = /^#sgg-/;
        var id;
        if ( reSmooth.test(location.hash) ) {
            id = '#' + location.hash.replace(reSmooth, '');
            jQuery.smoothScroll({
                scrollTarget: id,
                offset: -70,
                speed: 1000
            });
        }

    });


    // jQuery(window).on('load', function() {

    //     var number = jQuery('.followers span:first').data("smf");
    //     // var str = number.toString().split(".");
    //     // str[0] = str[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    //     // var follower = str.join(".");


    //     // Called the function in each second
    //     var interval = setInterval(function() {
    //         var counter = number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');

    //         jQuery('#total-followers').text(counter++);


    //         if (number > 100000000) {
    //             clearInterval(interval);
    //         }
    //     }, 3000);

    // });




})(jQuery);



// The basic check of site fully loaded
if(document.readyState === 'complete') {

}

// Polling for the sake of my Cookies
var interval = setInterval(function() {
    if(document.readyState === 'complete') {
        clearInterval(interval);
        // done();
    }    
}, 100);