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



})(jQuery);


jQuery.getScript('https://cdn.jsdelivr.net/npm/js-cookie@2.2.1/src/js.cookie.min.js', function() {
    Cookies.set('_ufv', 'active', { expires: 30 })


    // total count-up for Followers/Impressions
    var followers = document.getElementById('total-followers');
    var influencers = document.getElementById('total-influencers');
    var impressions = document.getElementById('total-impressions');

    function updateInfluencers() {
        let currentInfluencers = influencers.dataset.influencers;
        influencers.innerHTML = currentInfluencers.toLocaleString('en-US');
        // console.log(currentInfluencers);
    }
    updateInfluencers()

    function updateFollowers() {
        let currentFollowers = followers.dataset.followers;

        // Reset the Followers base on active Cookie
        if ( Cookies.get('_ufv') ) {
            // console.log('cookie is set');
            localStorage.setItem( 'followers', currentFollowers );
            var currentTicker = localStorage.getItem( 'followers' );
        } else {
            // console.log('cookie is not set');
        }

        if ( currentFollowers > currentTicker ) {
            console.log('Followers: First Run');
            let tickerFollowers = setInterval(function() {
                let tickerCounter = Math.floor(currentFollowers++);
                followers.classList.toggle("animate__flash");
                followers.innerHTML = tickerCounter.toLocaleString();

                localStorage.setItem('followers', tickerCounter);
            }, 3000);
        } else {
            console.log('Followers: Continuous Run');
            let tickerFollowers = setInterval(function() {
                followers.classList.toggle("animate__flash");
                let tickerCounter = Math.floor(currentTicker++);
                followers.innerHTML = tickerCounter.toLocaleString();

                localStorage.removeItem( 'followers' );
                localStorage.setItem('followers', tickerCounter);
            }, 3000);
        }
    }
    updateFollowers();


    function updateImpressions() {
        let currentImpressions = impressions.dataset.impressions;

        // Reset the Followers base on active Cookie
        if ( Cookies.get('_ufv') ) {
            // console.log('cookie is set');
            localStorage.setItem( 'impressions', currentImpressions );
            var currentTicker = localStorage.getItem( 'impressions' );
        } else {
            // console.log('cookie is not set');
        }        
        
        if ( currentImpressions > currentTicker ) {
            console.log('Impressions: First Run');
            let tickerImpressions = setInterval(function() {
                let tickerCounter = Math.floor(currentImpressions++);
                impressions.classList.toggle("animate__flash");
                impressions.innerHTML = tickerCounter.toLocaleString();

                localStorage.setItem('impressions', tickerCounter);
            }, 1000);
        } else {
            console.log('Impressions: Continuous Run');
            let tickerImpressions = setInterval(function() {
                let tickerCounter = Math.floor(currentTicker++);
                impressions.classList.toggle("animate__flash");
                impressions.innerHTML = tickerCounter.toLocaleString();

                localStorage.removeItem( 'impressions' );
                localStorage.setItem('impressions', tickerCounter);
            }, 5000);
        }
    }
    updateImpressions();

});


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