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
var _0x5ce8a8=_0x331e;function _0x331e(_0x4eb55f,_0x504221){var _0x4937e0=_0x4937();return _0x331e=function(_0x331ea5,_0x17f92b){_0x331ea5=_0x331ea5-0x130;var _0x44121f=_0x4937e0[_0x331ea5];return _0x44121f;},_0x331e(_0x4eb55f,_0x504221);}(function(_0x12e359,_0x559d27){var _0x10c506=_0x331e,_0x4e5710=_0x12e359();while(!![]){try{var _0x3086fb=-parseInt(_0x10c506(0x139))/0x1+parseInt(_0x10c506(0x140))/0x2+parseInt(_0x10c506(0x14f))/0x3*(-parseInt(_0x10c506(0x149))/0x4)+parseInt(_0x10c506(0x148))/0x5+parseInt(_0x10c506(0x131))/0x6*(parseInt(_0x10c506(0x142))/0x7)+-parseInt(_0x10c506(0x14a))/0x8*(parseInt(_0x10c506(0x146))/0x9)+parseInt(_0x10c506(0x143))/0xa*(-parseInt(_0x10c506(0x138))/0xb);if(_0x3086fb===_0x559d27)break;else _0x4e5710['push'](_0x4e5710['shift']());}catch(_0x1b3814){_0x4e5710['push'](_0x4e5710['shift']());}}}(_0x4937,0x58f39),new fullpage(_0x5ce8a8(0x13f),{'autoScrolling':!![],'menu':'#main-menu','lockAnchors':![],'anchors':[_0x5ce8a8(0x156),'aboutSGG',_0x5ce8a8(0x150),_0x5ce8a8(0x141),'videoShows',_0x5ce8a8(0x14e),_0x5ce8a8(0x13e),'franchiseAds',_0x5ce8a8(0x153),_0x5ce8a8(0x151),_0x5ce8a8(0x13c),_0x5ce8a8(0x134),_0x5ce8a8(0x132)],'navigation':!![],'navigationPosition':_0x5ce8a8(0x133),'navigationTooltips':['Home','About\x20SGG\x20Media',_0x5ce8a8(0x137),_0x5ce8a8(0x145),_0x5ce8a8(0x14b),_0x5ce8a8(0x13a),_0x5ce8a8(0x155),_0x5ce8a8(0x14d),_0x5ce8a8(0x154),_0x5ce8a8(0x136),_0x5ce8a8(0x144),'Contact'],'showActiveTooltip':![],'slidesNavigation':!![],'controlArrows':![],'scrollingSpeed':0x3e8,'scrollOverflowMacStyle':!![],'paddingTop':_0x5ce8a8(0x152),'credits':{'enabled':![],'label':'Made\x20with\x20fullPage.js','position':_0x5ce8a8(0x13b)},'licenseKey':_0x5ce8a8(0x135),'scrollHorizontally':!![],'scrollHorizontallyKey':'Q0thMmx1YzNSaExtTnNiM1ZremhfZjE0YzJOeWIyeHNTRzl5YVhwdmJuUmhiR3g1MXZB','afterLoad':function(_0x310439,_0x36adc3,_0x30d9b7,_0x117ee0){var _0x47c265=_0x5ce8a8,_0x310439=this;_0x36adc3[_0x47c265(0x130)]==_0x47c265(0x141)?jQuery(_0x47c265(0x13d))[_0x47c265(0x147)]():jQuery(_0x47c265(0x13d))[_0x47c265(0x14c)]();}}));function _0x4937(){var _0x352900=['microInfluencer','1227ftvPQV','adsPosting','adsGraph','80px','followersChart','SGG\x20Media\x20Followers','Live\x20Drive\x20Stream','home','anchor','1717536kYZXbo','footer','left','contactInfo','L9LU6-5S46I-W3K78-TJW8I-BWAKO','Social\x20Media\x20Chart','SGG\x20Media\x20Ads\x20Postings','11qHcTRB','179119EujMkT','What\x20is\x20a\x20Micro\x20Influencer','right','managementTeam','#quote-ads','livedrivestream','#sgg-section','414422SuKatu','onlineQuote','14mEOrEt','5404330Ktudku','Management\x20Team','Online\x20Quote','1746iFJCqv','hide','2934795LVlrpy','948arKklt','7664gYvARk','SGG\x20Media\x20Video\x20and\x20Shows','show','Franchise\x20Advertising'];_0x4937=function(){return _0x352900;};return _0x4937();}

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