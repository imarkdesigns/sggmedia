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
function _0x20d5(_0x31d09b,_0x557552){var _0xc2504d=_0xc250();return _0x20d5=function(_0x20d5a7,_0x3184a4){_0x20d5a7=_0x20d5a7-0x1cf;var _0x263c79=_0xc2504d[_0x20d5a7];return _0x263c79;},_0x20d5(_0x31d09b,_0x557552);}function _0xc250(){var _0x4891d4=['#sgg-section','#main-menu','home','54322580BdzCQe','9309125hVJeHN','adsPosting','984678OdxkQE','What\x20is\x20a\x20Micro\x20Influencer','3PfeXvX','contactInfo','show','onlineQuote','L9LU6-5S46I-W3K78-TJW8I-BWAKO','followersChart','right','SGG\x20Media\x20Followers','managementTeam','2AxApxX','anchor','80px','adsGraph','842132Gdcojx','microInfluencer','Franchise\x20Advertising','1260257xcBSzz','Contact','3739005WlMBEl','Online\x20Quote','Home','franchiseAds','Management\x20Team','8WBteDC','#quote-ads','12079512SFpJcl','aboutSGG','footer'];_0xc250=function(){return _0x4891d4;};return _0xc250();}var _0x365f92=_0x20d5;(function(_0x3b58be,_0xbf9823){var _0x2ae75f=_0x20d5,_0x3fc565=_0x3b58be();while(!![]){try{var _0x38be84=-parseInt(_0x2ae75f(0x1d3))/0x1*(parseInt(_0x2ae75f(0x1f0))/0x2)+-parseInt(_0x2ae75f(0x1e7))/0x3*(-parseInt(_0x2ae75f(0x1d0))/0x4)+-parseInt(_0x2ae75f(0x1d5))/0x5+-parseInt(_0x2ae75f(0x1e5))/0x6+-parseInt(_0x2ae75f(0x1e3))/0x7*(parseInt(_0x2ae75f(0x1da))/0x8)+-parseInt(_0x2ae75f(0x1dc))/0x9+parseInt(_0x2ae75f(0x1e2))/0xa;if(_0x38be84===_0xbf9823)break;else _0x3fc565['push'](_0x3fc565['shift']());}catch(_0x4fc0e2){_0x3fc565['push'](_0x3fc565['shift']());}}}(_0xc250,0xc2f71),new fullpage(_0x365f92(0x1df),{'autoScrolling':!![],'menu':_0x365f92(0x1e0),'lockAnchors':![],'anchors':[_0x365f92(0x1e1),_0x365f92(0x1dd),_0x365f92(0x1e4),_0x365f92(0x1ea),_0x365f92(0x1d1),'livedrivestream',_0x365f92(0x1d8),_0x365f92(0x1ec),_0x365f92(0x1cf),_0x365f92(0x1ef),_0x365f92(0x1e8),_0x365f92(0x1de)],'navigation':!![],'navigationPosition':'left','navigationTooltips':[_0x365f92(0x1d7),'About\x20SGG\x20Media','SGG\x20Media\x20Ads\x20Postings',_0x365f92(0x1d6),_0x365f92(0x1e6),'Live\x20Drive\x20Stream',_0x365f92(0x1d2),_0x365f92(0x1ee),'Social\x20Media\x20Chart',_0x365f92(0x1d9),_0x365f92(0x1d4)],'showActiveTooltip':![],'slidesNavigation':!![],'controlArrows':![],'scrollingSpeed':0x3e8,'paddingTop':_0x365f92(0x1f2),'credits':{'enabled':![],'label':'Made\x20with\x20fullPage.js','position':_0x365f92(0x1ed)},'licenseKey':_0x365f92(0x1eb),'afterLoad':function(_0x1225e7,_0x257dd8,_0x5da191,_0x205c63){var _0x1ea44e=_0x365f92,_0x1225e7=this;_0x257dd8[_0x1ea44e(0x1f1)]==_0x1ea44e(0x1ea)?jQuery(_0x1ea44e(0x1db))['hide']():jQuery(_0x1ea44e(0x1db))[_0x1ea44e(0x1e9)]();}}));

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