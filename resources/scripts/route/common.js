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

        var reSmooth = /^#sgg/;
        var id;
        if ( reSmooth.test(location.hash) ) {
            id = '#' + location.hash.replace(reSmooth, '');
            jQuery.smoothScroll({
                scrollTarget: id,
                offset: -15,
                speed: 500
            });
        }

    });

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