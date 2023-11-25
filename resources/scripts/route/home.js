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
var _0x2161dc=_0x120d;function _0x120d(_0x4ddcf8,_0x945ae8){var _0x4eb0ce=_0x4eb0();return _0x120d=function(_0x120d1f,_0x10243c){_0x120d1f=_0x120d1f-0x1c9;var _0x3db37b=_0x4eb0ce[_0x120d1f];return _0x3db37b;},_0x120d(_0x4ddcf8,_0x945ae8);}function _0x4eb0(){var _0x1e1fb4=['51YQSuWU','872778UXFtxr','Home','#sgg-section','L9LU6-5S46I-W3K78-TJW8I-BWAKO','aboutSGG','3990136rhPWlI','80px','7XwVBMO','1725230tTCclR','home','#main-menu','onlineQuote','SGG\x20Media\x20Ads\x20Postings','livedrivestream','left','footer','40930QeNIia','show','Contact','adsPosting','followersChart','#quote-ads','videoShows','4866939mXnDzw','Social\x20Media\x20Chart','Live\x20Drive\x20Stream','Q0thMmx1YzNSaExtTnNiM1ZremhfZjE0YzJOeWIyeHNTRzl5YVhwdmJuUmhiR3g1MXZB','franchiseAds','microInfluencer','SGG\x20Media\x20Followers','contactInfo','hide','210842ZFZRsc','Franchise\x20Advertising','Made\x20with\x20fullPage.js','SGG\x20Media\x20Video\x20and\x20Shows','1561508QBVDzQ','anchor','Management\x20Team','adsGraph'];_0x4eb0=function(){return _0x1e1fb4;};return _0x4eb0();}(function(_0x39f4b6,_0x14e461){var _0xbb76c7=_0x120d,_0x933e00=_0x39f4b6();while(!![]){try{var _0x4f3ad7=-parseInt(_0xbb76c7(0x1e1))/0x1+-parseInt(_0xbb76c7(0x1d1))/0x2*(-parseInt(_0xbb76c7(0x1e9))/0x3)+-parseInt(_0xbb76c7(0x1e5))/0x4+-parseInt(_0xbb76c7(0x1c9))/0x5+-parseInt(_0xbb76c7(0x1ea))/0x6+parseInt(_0xbb76c7(0x1f1))/0x7*(parseInt(_0xbb76c7(0x1ef))/0x8)+parseInt(_0xbb76c7(0x1d8))/0x9;if(_0x4f3ad7===_0x14e461)break;else _0x933e00['push'](_0x933e00['shift']());}catch(_0x59779f){_0x933e00['push'](_0x933e00['shift']());}}}(_0x4eb0,0x48323),new fullpage(_0x2161dc(0x1ec),{'autoScrolling':!![],'menu':_0x2161dc(0x1cb),'lockAnchors':![],'anchors':[_0x2161dc(0x1ca),_0x2161dc(0x1ee),_0x2161dc(0x1d4),_0x2161dc(0x1cc),_0x2161dc(0x1d7),_0x2161dc(0x1dd),_0x2161dc(0x1ce),_0x2161dc(0x1dc),_0x2161dc(0x1d5),_0x2161dc(0x1e8),'managementTeam',_0x2161dc(0x1df),_0x2161dc(0x1d0)],'navigation':!![],'navigationPosition':_0x2161dc(0x1cf),'navigationTooltips':[_0x2161dc(0x1eb),'About\x20SGG\x20Media',_0x2161dc(0x1cd),'Online\x20Quote',_0x2161dc(0x1e4),'What\x20is\x20a\x20Micro\x20Influencer',_0x2161dc(0x1da),_0x2161dc(0x1e2),_0x2161dc(0x1de),_0x2161dc(0x1d9),_0x2161dc(0x1e7),_0x2161dc(0x1d3)],'showActiveTooltip':![],'slidesNavigation':!![],'controlArrows':![],'scrollingSpeed':0x3e8,'paddingTop':_0x2161dc(0x1f0),'credits':{'enabled':![],'label':_0x2161dc(0x1e3),'position':'right'},'licenseKey':_0x2161dc(0x1ed),'scrollHorizontally':!![],'scrollHorizontallyKey':_0x2161dc(0x1db),'afterLoad':function(_0x47231b,_0x5319c2,_0x41ce87,_0x2b6988){var _0x1ea061=_0x2161dc,_0x47231b=this;_0x5319c2[_0x1ea061(0x1e6)]==_0x1ea061(0x1cc)?jQuery('#quote-ads')[_0x1ea061(0x1e0)]():jQuery(_0x1ea061(0x1d6))[_0x1ea061(0x1d2)]();}}));

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