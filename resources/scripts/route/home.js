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
function _0x3ee9(_0x55c6bc,_0x4d0900){var _0x19cdbb=_0x19cd();return _0x3ee9=function(_0x3ee9fc,_0x58d200){_0x3ee9fc=_0x3ee9fc-0x108;var _0x252631=_0x19cdbb[_0x3ee9fc];return _0x252631;},_0x3ee9(_0x55c6bc,_0x4d0900);}var _0x35b28f=_0x3ee9;(function(_0x2314af,_0x43929e){var _0x1834aa=_0x3ee9,_0x13adef=_0x2314af();while(!![]){try{var _0x455b20=-parseInt(_0x1834aa(0x110))/0x1+parseInt(_0x1834aa(0x10e))/0x2+parseInt(_0x1834aa(0x117))/0x3+-parseInt(_0x1834aa(0x121))/0x4*(-parseInt(_0x1834aa(0x120))/0x5)+parseInt(_0x1834aa(0x10d))/0x6+-parseInt(_0x1834aa(0x11a))/0x7*(parseInt(_0x1834aa(0x114))/0x8)+-parseInt(_0x1834aa(0x11f))/0x9*(-parseInt(_0x1834aa(0x11d))/0xa);if(_0x455b20===_0x43929e)break;else _0x13adef['push'](_0x13adef['shift']());}catch(_0x38c3fb){_0x13adef['push'](_0x13adef['shift']());}}}(_0x19cd,0xe070c),new fullpage(_0x35b28f(0x12a),{'autoScrolling':!![],'scrollHorizontally':!![],'menu':_0x35b28f(0x128),'lockAnchors':![],'anchors':[_0x35b28f(0x12d),_0x35b28f(0x125),_0x35b28f(0x127),_0x35b28f(0x111),'onlineQuote','microInfluencer',_0x35b28f(0x113),_0x35b28f(0x119),_0x35b28f(0x108),_0x35b28f(0x11e),_0x35b28f(0x10c),_0x35b28f(0x124),_0x35b28f(0x11b)],'navigation':!![],'navigationPosition':'left','navigationTooltips':[_0x35b28f(0x12e),_0x35b28f(0x123),_0x35b28f(0x12f),'SGG\x20Media\x20Ads\x20Postings',_0x35b28f(0x112),_0x35b28f(0x116),_0x35b28f(0x12b),'Franchise\x20Advertising',_0x35b28f(0x10a),_0x35b28f(0x11c),_0x35b28f(0x118),'Contact'],'showActiveTooltip':![],'slidesNavigation':!![],'controlArrows':![],'scrollingSpeed':0x3e8,'paddingTop':_0x35b28f(0x129),'credits':{'enabled':![],'label':_0x35b28f(0x130),'position':_0x35b28f(0x10b)},'licenseKey':_0x35b28f(0x109),'scrollHorizontallyKey':_0x35b28f(0x12c),'afterLoad':function(_0x4487d2,_0x2ebc70,_0x477c74,_0x55c4f3){var _0xf703fc=_0x35b28f,_0x4487d2=this;_0x2ebc70[_0xf703fc(0x10f)]==_0xf703fc(0x115)?jQuery('#quote-ads')['hide']():jQuery(_0xf703fc(0x122))[_0xf703fc(0x126)]();}}));function _0x19cd(){var _0x118b2e=['Made\x20with\x20fullPage.js','followersChart','L9LU6-5S46I-W3K78-TJW8I-BWAKO','SGG\x20Media\x20Followers','right','managementTeam','7398636rxZgqa','3156140SapdkV','anchor','1597769wtRYzR','adsPosting','Online\x20Quote','livedrivestream','10175624ZDAdjZ','onlineQuote','What\x20is\x20a\x20Micro\x20Influencer','950514KYXkqy','Management\x20Team','franchiseAds','7DHTMtR','footer','Social\x20Media\x20Chart','280NzTIsB','adsGraph','56493JbzuaB','63850QyyVNq','152mAQBGM','#quote-ads','About\x20SGG\x20Media','contactInfo','aboutSGG','show','videoShows','#main-menu','80px','#sgg-section','Live\x20Drive\x20Stream','Q0thMmx1YzNSaExtTnNiM1ZremhfZjE0YzJOeWIyeHNTRzl5YVhwdmJuUmhiR3g1MXZB','home','Home','SGG\x20Media\x20Videos\x20&\x20Shows'];_0x19cd=function(){return _0x118b2e;};return _0x19cd();}

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