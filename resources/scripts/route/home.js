(function($) {

    // Polling for the sake of my Cookies
    var interval = setInterval(function() {
        if(document.readyState === 'complete') {
            clearInterval(interval);
            // done();

            // setTimeout(function() {
            //     UIkit.modal('#RequestQuote').show();
            // }, 2500);2

        }    
    }, 100);

})(jQuery);

// fullPage JS Init
new fullpage('#sgg-section', {
    // License
    licenseKey: 'L9LU6-5S46I-W3K78-TJW8I-BWAKO',
    autoScrolling: true,

    // Extension
    scrollHorizontallyKey: 'Q0thMmx1YzNSaExtTnNiM1ZremhfZjE0YzJOeWIyeHNTRzl5YVhwdmJuUmhiR3g1MXZB',
    scrollHorizontally: true,

    // Options
    menu: '#main-menu',
    lockAnchors: false,
    anchors: ['home', 'aboutSGG', 'adsPosting', 'onlineQuote', 'microInfluencer', 'livedrivestream', 'franchiseAds', 'followersChart', 'adsGraph', 'managementTeam', 'contactInfo', 'footer'],
    navigation: true,
    navigationPosition: 'left',
    navigationTooltips: ['Home', 'About SGG Media', 'SGG Media Ads Postings', 'Online Quote', 'What is a Micro Influencer', 'Live Drive Stream', 'Franchise Advertising', 'SGG Media Followers', 'Social Media Chart', 'Management Team', 'Contact'],
    showActiveTooltip: false,
    slidesNavigation: true,
    controlArrows: false,
    scrollingSpeed: 1000,
    paddingTop: '80px',
    credits: { 
        enabled: false, 
        label: 'Made with fullPage.js', 
        position: 'right'
    },
    afterLoad: function(origin, destination, direction, trigger){
        var origin = this;

        if(destination.anchor == 'onlineQuote'){
            jQuery('#quote-ads').hide();
        } else {
            jQuery('#quote-ads').show();
        }
    }
});

// ChartJS
jQuery.getScript('https://cdn.jsdelivr.net/npm/chart.js', function() {

    const data = {
        datasets: [{
            label: 'Traditional Advertising CPM',
            maxBarThickness: 50,
            // barThickness: 45,
            barPercentage: 1.0,
            categoryPercentage: 1.0,
            backgroundColor: [ 'rgb(248,117,19)' ],
            data: [
                { x: 'National TV Ads', y:25 },
                { x: 'Sports Radio Ads', y:20, },
                { x: 'Google Display Ads', y:7.14, },
                { x: 'Instagram Ads', y:15.82, },
                { x: 'Twitter Ads', y:12.82, }
            ],
        }, {
            label: 'SGG Advertising CPM',
            maxBarThickness: 50,
            // barThickness: 45,
            barPercentage: 1.0,
            categoryPercentage: 1.0,        
            backgroundColor: [ 'rgb(40,167,80)' ],
            data: [
                { x: 'SGG Instagram Influencers (Impressions)', y:3.88 },
                { x: 'SGG Twitter Influencers (Impressions)', y:4.53, },
                { x: 'SGG Instagram Influencers (Followers)', y:2.16, },
                { x: 'SGG Twitter Influencers (Followers)', y:2.10, }
            ],

        }]
    };

    const config = {
        type: 'bar',
        data: data,
        options: {
            maintainAspectRatio: false,
            scales: {
                y: {
                  stacked: false,
                  grid: {
                    display: true,
                    color: "rgba(255,99,132,0.2)"
                  }
                },
                x: {
                    grid: {
                      display: false
                    }
                }
            },
            plugins: {
                title: {
                    display: true,
                    text: 'Dollar Rate ($)',
                    position: 'left'
                }
            }
        }
    };

    const myChart = new Chart(
        document.getElementById('SGGChart'),
        config
    );
});