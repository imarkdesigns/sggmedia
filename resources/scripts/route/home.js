(function($) {

    // Polling for the sake of my Cookies
    var interval = setInterval(function() {
        if(document.readyState === 'complete') {
            clearInterval(interval);
            // done();

            // Advertising Graph Headline
            jQuery('#graph').find('p:first').addClass('uk-text-lead uk-heading-line').wrapInner('<span></span>')
                            .next().addClass('uk-text-uppercase');

            // Management Team Headline
            jQuery('#team header').find('h2').addClass('team-headline');
        }    
    }, 100);

})(jQuery);

// fullPage JS Init
function _0x54ea(){var _0x36e46d=['footer','left','What\x20is\x20a\x20Micro\x20Influencer','2346110pGrzvG','1937978dEOoNC','contactInfo','livedrivestream','Q0thMmx1YzNSaExtTnNiM1ZremhfZjE0YzJOeWIyeHNTRzl5YVhwdmJuUmhiR3g1MXZB','2063580FdqwLD','23182McSkya','videoShows','Franchise\x20Advertising','followersChart','hide','Made\x20with\x20fullPage.js','1970514DXMEOP','About\x20SGG\x20Media','SGG\x20Media\x20Video\x20and\x20Shows','home','Social\x20Media\x20Chart','L9LU6-5S46I-W3K78-TJW8I-BWAKO','onlineQuote','microInfluencer','adsPosting','Management\x20Team','80px','517229TzBDla','3vBMSlL','#quote-ads','Online\x20Quote','Contact','right','franchiseAds','adsGraph','show','SGG\x20Media\x20Followers','7275555KSVuGe','SGG\x20Media\x20Ads\x20Postings','8gNIdtI'];_0x54ea=function(){return _0x36e46d;};return _0x54ea();}function _0x1bcc(_0x1ef4fb,_0x2afc55){var _0x54eaa3=_0x54ea();return _0x1bcc=function(_0x1bccbb,_0x225209){_0x1bccbb=_0x1bccbb-0x66;var _0x4560bd=_0x54eaa3[_0x1bccbb];return _0x4560bd;},_0x1bcc(_0x1ef4fb,_0x2afc55);}var _0x3b381a=_0x1bcc;(function(_0x585cbe,_0x2f3e37){var _0x5ae15f=_0x1bcc,_0x375a15=_0x585cbe();while(!![]){try{var _0x58d36d=-parseInt(_0x5ae15f(0x7d))/0x1+-parseInt(_0x5ae15f(0x6c))/0x2*(-parseInt(_0x5ae15f(0x7e))/0x3)+parseInt(_0x5ae15f(0x6b))/0x4+-parseInt(_0x5ae15f(0x66))/0x5+-parseInt(_0x5ae15f(0x72))/0x6+parseInt(_0x5ae15f(0x67))/0x7+-parseInt(_0x5ae15f(0x89))/0x8*(-parseInt(_0x5ae15f(0x87))/0x9);if(_0x58d36d===_0x2f3e37)break;else _0x375a15['push'](_0x375a15['shift']());}catch(_0x27f61c){_0x375a15['push'](_0x375a15['shift']());}}}(_0x54ea,0x48b89),new fullpage('#sgg-section',{'autoScrolling':!![],'menu':'#main-menu','lockAnchors':![],'anchors':[_0x3b381a(0x75),'aboutSGG',_0x3b381a(0x6d),_0x3b381a(0x7a),_0x3b381a(0x78),_0x3b381a(0x79),_0x3b381a(0x69),_0x3b381a(0x83),_0x3b381a(0x6f),_0x3b381a(0x84),'managementTeam',_0x3b381a(0x68),_0x3b381a(0x8a)],'navigation':!![],'navigationPosition':_0x3b381a(0x8b),'navigationTooltips':['Home',_0x3b381a(0x73),_0x3b381a(0x74),_0x3b381a(0x88),_0x3b381a(0x80),_0x3b381a(0x8c),'Live\x20Drive\x20Stream',_0x3b381a(0x6e),_0x3b381a(0x86),_0x3b381a(0x76),_0x3b381a(0x7b),_0x3b381a(0x81)],'showActiveTooltip':![],'slidesNavigation':!![],'controlArrows':![],'scrollingSpeed':0x3e8,'paddingTop':_0x3b381a(0x7c),'licenseKey':_0x3b381a(0x77),'credits':{'enabled':![],'label':_0x3b381a(0x71),'position':_0x3b381a(0x82)},'scrollHorizontally':!![],'scrollHorizontallyKey':_0x3b381a(0x6a),'afterLoad':function(_0x48cf27,_0x29710a,_0x4e44b6,_0xa3791f){var _0x39ac9f=_0x3b381a,_0x48cf27=this;_0x29710a['anchor']==_0x39ac9f(0x78)?jQuery('#quote-ads')[_0x39ac9f(0x70)]():jQuery(_0x39ac9f(0x7f))[_0x39ac9f(0x85)]();}}));

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