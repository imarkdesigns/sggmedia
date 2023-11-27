(function($) {

    jQuery.getScript('https://cdnjs.cloudflare.com/ajax/libs/jquery-smooth-scroll/2.2.0/jquery.smooth-scroll.min.js', function() {        
        // jQuery( "#skipToLink" ).on( "click", function() {
        //     jQuery.smoothScroll({
        //         scrollTarget: '#Contents',
        //         offset: -80,
        //         speed: 1000
        //     });
        // });
        jQuery('#skipToLink').trigger('click');

        var reSmooth = /^#sgg-/;
        var id;
        if ( reSmooth.test(location.hash) ) {
            id = '#' + location.hash.replace(reSmooth, '');
            jQuery.smoothScroll({
                scrollTarget: id,
                offset: -120,
                speed: 1000
            });
        }

    });

    UIkit.util.on('#mobile', 'scrolled', function () {
        UIkit.offcanvas('#mobile').toggle();
    });

    // SGG Media Influencer Agreement Checkbox Control
    // jQuery('.sggmi-agreement .forminator-checkbox__wrapper').find('input').prop('disabled', true);
    // Add 'class' to wrapper to styling
    // if ( jQuery('.forminator-checkbox__wrapper input').is(':checked') ) {
    //     jQuery('.forminator-checkbox__wrapper').removeClass('| read-terms');
    // } else {
    //     jQuery('.forminator-checkbox__wrapper').addClass('| read-terms');
    // }

    // scroll
    // jQuery('.sggmi-terms').find('.uk-article').scroll(function (e) {
    //     if (jQuery(this).scrollTop() + jQuery(this).innerHeight() >= jQuery(this)[0].scrollHeight) {
    //         jQuery('.forminator-checkbox__wrapper').removeClass('| read-terms');
    //         jQuery('.sggmi-agreement .forminator-checkbox__wrapper').find('input').prop('disabled', false);
    //     }
    // });

    // jQuery('#main').smoothState({ anchors: 'a' });

    // jQuery(function(){
    //   'use strict';
    //   var $page = $('#main'),
    //       options = {
    //         debug: true,
    //         prefetch: true,
    //         cacheLength: 2,
    //         onStart: {
    //           duration: 250, // Duration of our animation
    //           render: function ($container) {
    //             // Add your CSS animation reversing class
    //             $container.addClass('is-exiting');
    //             // Restart your animation
    //             smoothState.restartCSSAnimations();
    //           }
    //         },
    //         onReady: {
    //           duration: 0,
    //           render: function ($container, $newContent) {
    //             // Remove your CSS animation reversing class
    //             $container.removeClass('is-exiting');
    //             // Inject the new content
    //             $container.html($newContent);
    //           }
    //         }
    //       },
    //       smoothState = $page.smoothState(options).data('smoothState');
    // });

})(jQuery);



// total count-up for Followers/Impressions
var followers = document.querySelector('.total-followers');
var influencers = document.querySelector('.total-influencers');
var impressions = document.querySelector('.total-impressions');

function updateInfluencers() {
    let currentInfluencers = influencers.dataset.influencers;
    influencers.innerHTML = currentInfluencers.toLocaleString('en-US');
    // console.log(currentInfluencers);
}
updateInfluencers()

function updateFollowers() {
    let currentFollowers = followers.dataset.followers;
    let currentTicker = localStorage.getItem( 'followers' );
    localStorage.setItem('followers', currentFollowers);

    if ( currentFollowers > currentTicker ) {
        let tickerFollowers = setInterval(function() {
            let tickerCounter = Math.floor(currentFollowers++);
            followers.classList.toggle("animate__flash");
            followers.innerHTML = tickerCounter.toLocaleString();

            localStorage.setItem('followers', tickerCounter);
        }, 3000);
    } else {
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
    let currentTicker = localStorage.getItem( 'impressions' );
    localStorage.setItem('impressions', currentImpressions);

    if ( currentImpressions > currentTicker ) {
        let tickerImpressions = setInterval(function() {
            let tickerCounter = Math.floor(currentImpressions++);
            impressions.classList.toggle("animate__flash");
            impressions.innerHTML = tickerCounter.toLocaleString();

            localStorage.setItem('impressions', tickerCounter);
        }, 1000);
    } else {
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

// total count-up for Followers/Impressions
var followers2 = document.querySelector('.total-followers2');
var influencers2 = document.querySelector('.total-influencers2');
var impressions2 = document.querySelector('.total-impressions2');

function updateInfluencers2() {
    let currentInfluencers = influencers2.dataset.influencers;
    influencers2.innerHTML = currentInfluencers.toLocaleString('en-US');
    // console.log(currentInfluencers);
}
updateInfluencers2()

function updateFollowers2() {
    let currentFollowers = followers2.dataset.followers;
    let currentTicker = localStorage.getItem( 'followers' );
    localStorage.setItem('followers', currentFollowers);

    if ( currentFollowers > currentTicker ) {
        let tickerFollowers = setInterval(function() {
            let tickerCounter = Math.floor(currentFollowers++);
            followers2.classList.toggle("animate__flash");
            followers2.innerHTML = tickerCounter.toLocaleString();

            localStorage.setItem('followers', tickerCounter);
        }, 3000);
    } else {
        let tickerFollowers = setInterval(function() {
            followers2.classList.toggle("animate__flash");
            let tickerCounter = Math.floor(currentTicker++);
            followers2.innerHTML = tickerCounter.toLocaleString();

            localStorage.removeItem( 'followers' );
            localStorage.setItem('followers', tickerCounter);
        }, 3000);
    }
}
updateFollowers2();

function updateImpressions2() {
    let currentImpressions = impressions2.dataset.impressions;
    let currentTicker = localStorage.getItem( 'impressions' );
    localStorage.setItem('impressions', currentImpressions);

    if ( currentImpressions > currentTicker ) {
        let tickerImpressions = setInterval(function() {
            let tickerCounter = Math.floor(currentImpressions++);
            impressions2.classList.toggle("animate__flash");
            impressions2.innerHTML = tickerCounter.toLocaleString();

            localStorage.setItem('impressions', tickerCounter);
        }, 1000);
    } else {
        let tickerImpressions = setInterval(function() {
            let tickerCounter = Math.floor(currentTicker++);
            impressions2.classList.toggle("animate__flash");
            impressions2.innerHTML = tickerCounter.toLocaleString();

            localStorage.removeItem( 'impressions' );
            localStorage.setItem('impressions', tickerCounter);
        }, 5000);
    }
}
updateImpressions2();


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