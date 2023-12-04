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
var _0x2508d=_0x18fb;function _0x18fb(_0x4a1c60,_0x5b6845){var _0x431437=_0x4314();return _0x18fb=function(_0x18fbd1,_0x50dedf){_0x18fbd1=_0x18fbd1-0xf7;var _0xea60e5=_0x431437[_0x18fbd1];return _0xea60e5;},_0x18fb(_0x4a1c60,_0x5b6845);}function _0x4314(){var _0x59f44f=['contactInfo','113409efOQDw','What\x20is\x20a\x20Micro\x20Influencer','#quote-ads','Franchise\x20Advertising','franchiseAds','8himuBt','#sgg-section','anchor','3770AzSTax','SGG\x20Media\x20Ads\x20Postings','Q0thMmx1YzNSaExtTnNiM1ZremhfZjE0YzJOeWIyeHNTRzl5YVhwdmJuUmhiR3g1MXZB','Management\x20Team','right','onlineQuote','home','SGG\x20Media\x20Followers','VUVhMmx1YzNSaExtTnNiM1ZrVXpfZjhVY21WelpYUlRiR2xrWlhKelN2Vw==','SGG\x20Media\x20Video\x20and\x20Shows','L9LU6-5S46I-W3K78-TJW8I-BWAKO','show','80px','#main-menu','152705AyQmVr','3817LakCEw','livedrivestream','410196aHLSAI','18Xqfsro','footer','hide','About\x20SGG\x20Media','Made\x20with\x20fullPage.js','adsPosting','4NihOFv','16410nMVoBi','microInfluencer','aboutSGG','3684779QgsETI','Contact','328QBaDLg','Home','left','220441BqWvwD','Online\x20Quote','6384ZDGPzR','videoShows'];_0x4314=function(){return _0x59f44f;};return _0x4314();}(function(_0x4e7b59,_0x334f4e){var _0x4f57ea=_0x18fb,_0x456bc9=_0x4e7b59();while(!![]){try{var _0x399a94=-parseInt(_0x4f57ea(0x109))/0x1*(parseInt(_0x4f57ea(0x100))/0x2)+parseInt(_0x4f57ea(0xf9))/0x3*(parseInt(_0x4f57ea(0x113))/0x4)+parseInt(_0x4f57ea(0x124))/0x5*(parseInt(_0x4f57ea(0xfa))/0x6)+parseInt(_0x4f57ea(0x104))/0x7+-parseInt(_0x4f57ea(0x106))/0x8*(parseInt(_0x4f57ea(0x10e))/0x9)+-parseInt(_0x4f57ea(0x101))/0xa*(-parseInt(_0x4f57ea(0xf7))/0xb)+-parseInt(_0x4f57ea(0x10b))/0xc*(parseInt(_0x4f57ea(0x116))/0xd);if(_0x399a94===_0x334f4e)break;else _0x456bc9['push'](_0x456bc9['shift']());}catch(_0x5b9645){_0x456bc9['push'](_0x456bc9['shift']());}}}(_0x4314,0x553b4),new fullpage(_0x2508d(0x114),{'autoScrolling':!![],'menu':_0x2508d(0x123),'lockAnchors':![],'anchors':[_0x2508d(0x11c),_0x2508d(0x103),_0x2508d(0x10c),_0x2508d(0xff),'onlineQuote',_0x2508d(0x102),_0x2508d(0xf8),_0x2508d(0x112),'followersChart','adsGraph','managementTeam',_0x2508d(0x10d),_0x2508d(0xfb)],'navigation':!![],'navigationPosition':_0x2508d(0x108),'navigationTooltips':[_0x2508d(0x107),_0x2508d(0xfd),_0x2508d(0x11f),_0x2508d(0x117),_0x2508d(0x10a),_0x2508d(0x10f),'Live\x20Drive\x20Stream',_0x2508d(0x111),_0x2508d(0x11d),'Social\x20Media\x20Chart',_0x2508d(0x119),_0x2508d(0x105)],'showActiveTooltip':![],'slidesNavigation':!![],'controlArrows':![],'recordHistory':!![],'scrollingSpeed':0x3e8,'paddingTop':_0x2508d(0x122),'credits':{'enabled':![],'label':_0x2508d(0xfe),'position':_0x2508d(0x11a)},'resetSliders':!![],'scrollHorizontally':!![],'resetSlidersKey':_0x2508d(0x11e),'scrollHorizontallyKey':_0x2508d(0x118),'licenseKey':_0x2508d(0x120),'afterLoad':function(_0x5f14cc,_0x51a7cb,_0x2e0a45,_0x3f116a){var _0x4853e1=_0x2508d,_0x5f14cc=this;_0x51a7cb[_0x4853e1(0x115)]==_0x4853e1(0x11b)?jQuery('#quote-ads')[_0x4853e1(0xfc)]():jQuery(_0x4853e1(0x110))[_0x4853e1(0x121)]();}}));

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