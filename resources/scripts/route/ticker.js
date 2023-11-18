(function($) {

   // Polling for the sake of my Cookies
   var interval = setInterval(function() {
       if(document.readyState === 'complete') {
           clearInterval(interval);
           // done();
           jQuery('.carouselTicker').carouselTicker({
              speed: 2,
              mode: 'horizontal',
              reverse: true
           });
       }    
   }, 100);



})(jQuery);