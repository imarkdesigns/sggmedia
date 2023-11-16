(function($) {

    // Polling for the sake of my Cookies
    var interval = setInterval(function() {
        if(document.readyState === 'complete') {
            clearInterval(interval);
            // done();

            // setTimeout(function() {
            //     UIkit.modal('#RequestQuote').show();
            // }, 2500);

        }    
    }, 100);


})(jQuery);