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

    // total count-up for Followers/Impressions
    var followers = document.getElementById('total-followers');
    var impressions = document.getElementById('total-impressions');

    function updateFollowers() {
        var d = new Date();
        d.setHours(0,0,0,0);
        var count = Math.floor( ( new Date().getTime() - d.getTime() ) / 100000 );
        followers.innerHTML = Math.floor( count + 24710369 ).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");        
    }

    function updateImpressions() {
        var d = new Date();
        d.setMonth( 0 );
        d.setDate( 1 );
        count = Math.floor( ( new Date().getTime() - d.getTime() ) / 20000000 )
        impressions.innerHTML = Math.floor( count + 10000000 ).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");

    }

    updateFollowers();
    setInterval( updateFollowers, 3000 );
    updateImpressions()
    setInterval( updateImpressions, 5000 );

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


// var number = jQuery('.followers span:first').data("smf");
// // var str = number.toString().split(".");
// // str[0] = str[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
// // var follower = str.join(".");


// // Called the function in each second
// var interval = setInterval(function() {
//     jQuery('#total-followers').empty().text(number++);

//     if (number > 999) {
//         clearInterval(interval);
//     }
// }, 3000);