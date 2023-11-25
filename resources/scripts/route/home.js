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
var _0x4b7b2a=_0x4256;function _0x2831(){var _0x241235=['80px','SGG\x20Media\x20Followers','Q0thMmx1YzNSaExtTnNiM1ZremhfZjE0YzJOeWIyeHNTRzl5YVhwdmJuUmhiR3g1MXZB','Contact','Home','40xobFAw','left','1195812QSKpka','Live\x20Drive\x20Stream','home','3215UZQYpY','33574xwawsk','SGG\x20Media\x20Ads\x20Postings','1632qmZCeA','7916460BTkZVw','What\x20is\x20a\x20Micro\x20Influencer','Franchise\x20Advertising','5534544XtwYDC','1914LTNEyf','#sgg-section','right','Online\x20Quote','franchiseAds','3174fjEfVi','contactInfo','footer','3966508ZfluDQ','managementTeam','#main-menu','followersChart','onlineQuote','L9LU6-5S46I-W3K78-TJW8I-BWAKO','adsGraph','Made\x20with\x20fullPage.js','About\x20SGG\x20Media','anchor','livedrivestream'];_0x2831=function(){return _0x241235;};return _0x2831();}function _0x4256(_0x355e92,_0x3924be){var _0x28313a=_0x2831();return _0x4256=function(_0x42566e,_0x1bf38f){_0x42566e=_0x42566e-0xe8;var _0x4b044c=_0x28313a[_0x42566e];return _0x4b044c;},_0x4256(_0x355e92,_0x3924be);}(function(_0x4c9c2e,_0x2394f6){var _0x11e8d4=_0x4256,_0x3bd75b=_0x4c9c2e();while(!![]){try{var _0x45d0a9=-parseInt(_0x11e8d4(0x104))/0x1*(-parseInt(_0x11e8d4(0x10a))/0x2)+-parseInt(_0x11e8d4(0xf1))/0x3*(-parseInt(_0x11e8d4(0x10c))/0x4)+-parseInt(_0x11e8d4(0x109))/0x5*(parseInt(_0x11e8d4(0xec))/0x6)+-parseInt(_0x11e8d4(0xf4))/0x7+parseInt(_0x11e8d4(0xeb))/0x8+parseInt(_0x11e8d4(0x106))/0x9+-parseInt(_0x11e8d4(0xe8))/0xa;if(_0x45d0a9===_0x2394f6)break;else _0x3bd75b['push'](_0x3bd75b['shift']());}catch(_0x390df1){_0x3bd75b['push'](_0x3bd75b['shift']());}}}(_0x2831,0x58f87),new fullpage(_0x4b7b2a(0xed),{'autoScrolling':!![],'scrollHorizontally':!![],'menu':_0x4b7b2a(0xf6),'lockAnchors':![],'anchors':[_0x4b7b2a(0x108),'aboutSGG','adsPosting','onlineQuote','microInfluencer',_0x4b7b2a(0xfe),_0x4b7b2a(0xf0),_0x4b7b2a(0xf7),_0x4b7b2a(0xfa),_0x4b7b2a(0xf5),_0x4b7b2a(0xf2),_0x4b7b2a(0xf3)],'navigation':!![],'navigationPosition':_0x4b7b2a(0x105),'navigationTooltips':[_0x4b7b2a(0x103),_0x4b7b2a(0xfc),_0x4b7b2a(0x10b),_0x4b7b2a(0xef),_0x4b7b2a(0xe9),_0x4b7b2a(0x107),_0x4b7b2a(0xea),_0x4b7b2a(0x100),'Social\x20Media\x20Chart','Management\x20Team',_0x4b7b2a(0x102)],'showActiveTooltip':![],'slidesNavigation':!![],'controlArrows':![],'scrollingSpeed':0x3e8,'paddingTop':_0x4b7b2a(0xff),'credits':{'enabled':![],'label':_0x4b7b2a(0xfb),'position':_0x4b7b2a(0xee)},'licenseKey':_0x4b7b2a(0xf9),'scrollHorizontallyKey':_0x4b7b2a(0x101),'afterLoad':function(_0x51fd64,_0x394842,_0xe95fdd,_0x202573){var _0x407e04=_0x4b7b2a,_0x51fd64=this;_0x394842[_0x407e04(0xfd)]==_0x407e04(0xf8)?jQuery('#quote-ads')['hide']():jQuery('#quote-ads')['show']();}}));
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