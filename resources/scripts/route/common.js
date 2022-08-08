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
        var currentFollowers = ( 24710369 - 16000 ); // total followers on all social media platform
        var d = new Date();
        d.setHours(0,0,0,0);
        var counter = Math.floor( ( new Date().getTime() - d.getTime() ) / 3000 );
        followers.innerHTML = Math.floor( currentFollowers + counter ).toLocaleString();
    }
    updateFollowers();
    setInterval( updateFollowers, 3000 ); // Repeat for every 3 seconds

    function updateImpressions() {
        var currentImpressions = ( 10000000 - 9500 ); // total impressions on all social media platform
        var d = new Date();
        // d.setMonth(0);
        // d.setDate(1);
        d.setHours(0,0,0,0);
        counter = Math.floor( ( new Date().getTime() - d.getTime() ) / 5000 );
        impressions.innerHTML = Math.floor( currentImpressions + counter ).toLocaleString();
    }
    updateImpressions()
    setInterval( updateImpressions, 5000 );
    // var resetImpressions = setInterval(function() {
    //     updateImpressions;
    //     // var d = new Date();

    //     // if ( d.getDate < 32 ) {
    //     //     clearInterval(resetImpressions); // clear every month
    //     // }
    // }, 5000 ); // Repeat for every 5 seconds

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