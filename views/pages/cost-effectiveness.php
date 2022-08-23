<main id="main" class="main" role="main">
    
    <section id="Contents" class="uk-section | influencers-graph">
        <div class="uk-container">
            <div class="uk-grid-divider uk-flex-middle uk-flex-center" uk-grid>
                <div class="uk-width-expand">
                    <div class="uk-panel uk-text-center uk-margin-medium-bottom">
                        <img src="<?php echo _uri.'/resources/images/logo-sgg-media-black.png'; ?>" class="uk-margin-medium-bottom" alt="SGG Media Logo">
                        <h2>The Most Cost Effective Sports Advertising</h2>
                        <p>Advertising Cost Per 1000 Impressions (CPM)</p>
                    </div>
                    <div class="chart-container">
                        <canvas id="myChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="advertisers" class="advertisers | uk-section uk-section-muted">
        <div class="uk-container uk-container-expand">
            
            <div class="uk-headings uk-text-center uk-margin-medium-bottom">
                <h2>How SGG Advertiser Connect to Sport Fans</h2>
            </div>

            <div class="uk-grid-divider uk-grid-match uk-flex-middle" uk-grid>
                <div class="uk-width-expand@m">
                    <figure class="uk-panel">
                        <img src="<?php echo _uri.'/resources/images/sgg-media-graph-01.jpg' ?>" class="uk-box-shadow-medium" alt="Advertising - How It Works">
                    </figure>
                </div>
                <div class="uk-width-auto@m">
                    <div class="uk-panel">
                        <iframe src="https://www.youtube.com/embed/rQEvy83ZSCA?autoplay=1&loop=1&rel=0&playlist=rQEvy83ZSCA" width="526" height="480" frameborder="0" allowfullscreen uk-video="automute: true"></iframe>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="revenue" class="revenue | uk-section">
        <div class="uk-container">
            
            <div class="uk-headings uk-text-center uk-margin-medium-bottom">
                <h2>SGG Media Revenue Streams</h2>
            </div>

            <div class="uk-grid-divider uk-grid-match uk-flex-middle" uk-grid>
                <div class="uk-width-1-1">
                    <figure class="uk-panel">
                        <img src="<?php echo _uri.'/resources/images/sgg-media-graph-02.jpg' ?>" class="uk-box-shadow-medium" alt="Advertising - Revenue Streams">
                    </figure>
                </div>
            </div>

        </div>
    </section>

</main>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
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
    document.getElementById('myChart'),
    config
);
</script>