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
        let currentFollowers = 24710369;
        let currentTicker = localStorage.getItem( 'followers' );

        if ( currentFollowers > currentTicker ) {
            let tickerFollowers = setInterval(function() {
                let tickerCounter = Math.floor(currentFollowers++);
                followers.classList.toggle("animate__wobble");
                followers.innerHTML = tickerCounter.toLocaleString();

                localStorage.setItem('followers', tickerCounter);
            }, 5000);
        } else {
            let tickerFollowers = setInterval(function() {
                let tickerCounter = Math.floor(currentTicker++);
                followers.classList.toggle("animate__flash");
                followers.innerHTML = tickerCounter.toLocaleString();

                localStorage.clear();
                localStorage.setItem('followers', tickerCounter);
            }, 5000);
        }
    }
    updateFollowers();



// function randomRangeWithIncrements(min, max, inc) {
//     min = min || 0;
//     inc = inc || 1;
//     if(!max) { return new Error('need to define a max');}

//     return Math.floor(Math.random() * (max - min) / inc) * inc + min;
// }

// randomRangeWithIncrements();

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