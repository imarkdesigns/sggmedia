<main id="main" class="main uk-position-relative" role="main">
    <div id="client-ticker" class="uk-container uk-container-expand">
        <h2 class="uk-heading-divider">SGG Media Clients</h2>
            <div class="carouselTicker">
                <ul class="carouselTicker__list">
                    <?php 
                    $arr_logos = [ 'fliff', 'fanatics', 'blk-water', 'bt', 'dabble', 'draftkings', 'fanduel', 'frontrunner', 'joint-chiropractic', 'rithmm', 'takes-live' ]; 
                    for ( $n = 0; $n < count($arr_logos); $n++ ) : ?>
                        <li class="carouselTicker__list">
                            <img src="<?php echo _uri.'/resources/images/partners/ticker/img-logo-'.$arr_logos[$n].'.jpg'; ?>" alt="<?=$arr_logos[$n];?>">
                        </li>
                    <?php endfor; ?>
                </ul>
            </div>
    </div>

    <section id="about" class="about | uk-section">
        <div class="uk-container uk-container-expand">
            
            <div class="uk-child-width-1-2@m uk-flex-middle" uk-grid>
                <div>
                    <figure>
                        <img src="<?php echo _uri.'/resources/images/change-the-game.png'; ?>" alt="Social Media Marketing is Changing the Game">
                    </figure>
                </div>
                <div>
                    <div class="section-content">
                        <div class="section-who-we-are">
                            <h2>Who We Are</h2>
                            <ul>
                                <li>SGG Media is a social media sports advertising company with a network of thousands of micro-influencers connecting advertisers with our tens of millions of sports fans.</li>
                                <li>Provides turn-key advertising for our customers creating content, graphics and targeted postings to millions of sports fans.</li>
                                <li>Delivers tailored expertise and strategies that significantly enhances a company's presence and engagement.</li>
                                <li>SGG's "Instant Quote" online platform provides an advertising quote in seconds.</li>
                                <li>Produces successful video content (Splash Sisters) and live sports shows (Live Drive).</li>
                            </ul>
                        </div>
                        <div class="section-what-we-do | uk-margin-large-top">
                            <h2>What We Do</h2>
                            <ul>
                                <li>SGG delivers social media branding and advertising via cost-effective micro-influencers.</li>
                                <li>Creates personalized and unique ads tailored to the specific needs of each company.</li>
                                <li>Delivers advertising at a fraction of the cost of traditional advertising.</li>
                                <li>Provide Highly targeted marketing - Regionally or National.</li>
                                <li>Works with the nation's largest sports companies i.e. Draft Kings, Fan Duel and Fanatics.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="ad-postings" class="ads | uk-section">
        <div class="uk-grid-small uk-child-width-1-2@l" uk-grid>
            
            <div>
                <header class="uk-flex uk-flex-middle uk-flex-center uk-text-center uk-background-primary uk-width-1-1 uk-height-small uk-light uk-margin-bottom">
                    <h2>Social Media <br> Ad Postings</h2>    
                </header>
                <div class="uk-child-width-1-3@s uk-grid-small uk-grid-match" uk-grid>
                    <div><img src="<?php echo _uri.'/resources/images/social-media-ad-postings_03.jpg'; ?>" alt=""></div>
                    <div><img src="<?php echo _uri.'/resources/images/social-media-ad-postings_05.jpg'; ?>" alt=""></div>
                    <div><img src="<?php echo _uri.'/resources/images/social-media-ad-postings_07.jpg'; ?>" alt=""></div>
                    <div><img src="<?php echo _uri.'/resources/images/social-media-ad-postings_12.jpg'; ?>" alt=""></div>
                    <div><img src="<?php echo _uri.'/resources/images/social-media-ad-postings_13.jpg'; ?>" alt=""></div>
                    <div><img src="<?php echo _uri.'/resources/images/social-media-ad-postings_14.jpg'; ?>" alt=""></div>
                </div>
            </div>
            <div>
                <div class="uk-grid-small" uk-grid>
                    <div class="uk-width-1-3@s">
                        <header class="uk-flex uk-flex-middle uk-flex-center uk-text-center uk-background-secondary uk-width-1-1 uk-height-small uk-light uk-margin-bottom">
                            <h2>Franchise <br> Ad Content</h2>
                        </header>
                        <div class="uk-child-width-1-1 uk-grid-small uk-grid-match" uk-grid>
                            <div><img src="<?php echo _uri.'/resources/images/social-media-ad-postings_09.jpg'; ?>" alt=""></div>
                            <div><img src="<?php echo _uri.'/resources/images/social-media-ad-postings_16.jpg'; ?>" alt=""></div>
                        </div>
                    </div>
                    <div class="uk-width-2-3@s">
                        <header class="uk-flex uk-flex-middle uk-flex-center uk-text-center uk-background-primary uk-width-1-1 uk-height-small uk-light uk-margin-bottom">
                            <h2>Shows <br> Produced</h2>
                        </header>
                        <div class="uk-child-width-1-2@s uk-grid-small uk-grid-match" uk-grid>
                            <div><img src="<?php echo _uri.'/resources/images/social-media-ad-postings_11.jpg'; ?>" alt=""></div>
                            <div><img src="<?php echo _uri.'/resources/images/social-media-ad-postings_13a.jpg'; ?>" alt=""></div>
                            <div><img src="<?php echo _uri.'/resources/images/social-media-ad-postings_19.jpg'; ?>" alt=""></div>
                            <div><img src="<?php echo _uri.'/resources/images/social-media-ad-postings_20.jpg'; ?>" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="micro-influencer" class="micro-influencers | uk-section">
        <div class="uk-container uk-container-expand">
            <div class="uk-grid-match uk-flex-middle" uk-grid>
                
                <div class="section-content-column | uk-width-1-2@l">
                    <div class="section-content">
                        <h2>What is a Micro <br> <span class="uk-text-secondary">Influencer?</span></h2>
                        <p>Micro-Influencers are small accounts that have between 10,000 and 100,000 sports fan followers.</p>
                        <p>Micro-Influencers are social media content creators who focus on specific niches within regional and national markets.</p>

                        <figure class="uk-text-center">
                            <img src="<?php echo _uri.'/resources/images/micro-influencer-graph.png'; ?>" alt="">
                        </figure>
                    </div>
                </div>
                <div class="section-content-column | uk-width-1-2@l">
                    <div class="section-content uk-flex uk-flex-center">

                        <div class="section-media-container">
                            <video poster="https://sggmedia.com/wp-content/uploads/2023/09/screenshot.png" width="640" height="360" controls playsinline uk-video="autoplay: false">
                                <source src="https://sggmedia.com/wp-content/uploads/2023/09/Final-HD.mp4" type="video/mp4">
                            </video>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="livedrive | uk-section">
        <div class="uk-child-width-1-2@m uk-flex-middle" uk-grid>

            <div>
                <figure>
                    <img src="<?php echo _uri.'/resources/images/img-banner-livedrive.jpg'; ?>" alt="LiveDrive">
                </figure>
            </div>
            <div>
                <div class="stripes-wrapper">
                    <div class="uk-card">
                        <div class="uk-card-body">
                            <h2>Live Drive is a streaming live sport show produced by sgg media and hosted by gavin mchugh</h2>
                            <a href="https://www.youtube.com/watch?v=z20iJQiMni4"><img src="<?php echo _uri.'/resources/images/img-livedrive-url.png'; ?>" alt="YouTube"></a>
                            <p>The show provides an opportunity for sports fans to "Dual Screen” on laptops and cell phones while watching NFL Red Zone and live football games in progress. The colorful host, Gavin McHugh, gives out his favorite betting recommendations, especially "prop" and in game betting opportunities, invites audience participation, and invites live guests on the streaming sports show.</p>
                        </div>
                        <div class="uk-card-footer">
                            <h3>Live Drive will be streamed on</h3>
                            <ul class="uk-subnav">
                                <li><img src="<?php echo _uri.'/resources/images/icon-tiktok.png'; ?>" width="44" alt="TikTok"></li>
                                <li><img src="<?php echo _uri.'/resources/images/icon-instagram.png'; ?>" width="44" alt="Instagram"></li>
                                <li><img src="<?php echo _uri.'/resources/images/icon-twitter.png'; ?>" width="44" alt="Twitter"></li>
                                <li><img src="<?php echo _uri.'/resources/images/icon-twitch.png'; ?>" width="44" alt="Twitch"></li>
                            </ul>
                            <a href="https://www.youtube.com/@livedrivestream" class="uk-link-reset" target="_blank" rel="follow">@livedrivestream</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="franchise" class="franchise | uk-section">
        <div class="uk-container uk-container-expand">
            
            <div class="uk-child-width-1-2@m uk-flex-middle" uk-grid>
                <div>
                    <article class="uk-article">
                        <h2>Grow Your Business with Franchise Advertising</h2>
                        <p>Reach Your Audience In All 50 States With Cost Effective Social Media Advertising</p>
                        <p>Including sports micro-influencers for your franchise marketing offers several valuable benefits. SGG's social media advertising brings tailored expertise, fan-focused strategies, real-time updates, and industry-specific insight that will significantly enhance franchise's social media presence, engagement, and overall success with our network of thousands of micro-influencers and their tens of millions of sports fans.</p>
                        <h3>Here's why micro-influencers are so invaluable for franchise marketing:</h3>
                        <ul>
                            <li><strong>Niche Expertise:</strong> Sports Micro-influencers have a niche focus, such as specific local teams, which aligns well with the franchise's target audience. This allows for more targeted marketing efforts, reaching people who are genuinely interested in the franchise's products or service.</li>
                            <li><strong>Cost-Effectiveness:</strong> Making it an affordable option for franchises with limited marketing budgets.</li>
                            <li><strong>Geographic Relevance:</strong> For Franchises with multiple locations, micro influencers based in specific regions and specific sports teams, targets the local audience effectively. This approach will drive foot traffic and engagement at individual franchise locations.</li>
                            <li><strong>Engagement and Reach:</strong> Micro-Influencers have higher engagement rates since they have a smaller, more dedicated following and their posts are likely to be seen, commented on and shared.</li>
                        </ul>
                    </article>
                </div>
                <div>
                    <figure>
                        <img src="<?php echo _uri.'/resources/images/img-the-joint-chiropractic.jpg'; ?>" alt="">
                    </figure>
                </div>
            </div>

        </div>
    </section>

    <section class="followers-chart | uk-section">
        <div class="uk-container uk-container-expand">
            <div class="uk-child-width-1-2@m uk-grid-collapse uk-flex-center" uk-grid uk-grid-height-match="target: > div">
                <div>
                    <div class="four-stripes section-content-column">
                        
                        <figure class="headings | uk-text-center">
                            <img src="<?php echo _uri.'/resources/images/logo-sgg-media-black.png'; ?>" alt="SGG Media">
                            <h2>#3 IN SPORTS SOCIAL <br> Media Followers</h2>
                        </figure>

                    </div>
                </div>
                <div>
                    <div class="section-content-column | uk-padding-large">
                        
                        <figure>
                            <img src="<?php echo _uri.'/resources/images/img-followers-chart.png'; ?>" alt="Social Media Influencer & Followers Chart">
                        </figure>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="chart" class="advertising | uk-section">
        <div class="uk-container uk-container-expand">

            <div class="uk-headings">
                <img src="<?php echo _uri.'/resources/images/logo-sgg-media-black.png'; ?>" class="uk-margin-small-bottom" alt="<?php bloginfo(); ?>">
                <h2>The Most Cost Effective Sports Advertising</h2>
                <p>Advertising Cost Per 1000 Impressions (CPM)</p>
                <h3>Traditional Marketing Can Cost Hundreds Of Thousand Of Dollars Social Media Micro-Influencer Marketing Can Cost As Little As $1000 A Campaign.</h3>
            </div>
            <div class="chart-container">
                <canvas id="myChart"></canvas>
            </div>

        </div>
    </section>

    <?php $team = [ 'post_type' => 'page', 'page_id' => 124 ];
    query_posts( $team ); 

    while ( have_posts() ) : the_post(); ?>
    <section id="team" class="team executive | uk-section uk-padding-remove-bottom">
        <div class="uk-container">

            <div class="uk-headings uk-margin-medium-bottom">
                <p>Our Professional</p>
                <h2>Management Team</h2>
                <p>A Division of Sports Gambling Guides, Inc.</p>
            </div>

            <div class="team-wrapper | uk-flex-center" uk-grid uk-scrollspy="target: > .team-item; cls: uk-animation-slide-bottom-medium; delay: 300">
            <?php while ( have_rows( 'management_team' ) ) : the_row(); 
                $fullName = explode(" ", get_sub_field( 'profile_full_name' ));
                $fName    = strtolower(substr($fullName[0], 0, 1));
                $lName    = strtolower($fullName[1]); ?>
                <div class="team-item --<?=$fName.$lName?> | uk-width-auto@s uk-text-center">
                    <div class="uk-card">
                        <div class="uk-card-media-top">
                            <a href="#<?=$fName.$lName?>" uk-toggle>
                                <?php $avatar = get_sub_field( 'profile_photo' );
                                echo wp_get_attachment_image( $avatar['id'], [ 300, 300, true ] ); ?>
                            </a>
                        </div>
                        <div class="uk-card-body uk-text-left">
                            <h3 class="uk-card-title"><?php the_sub_field( 'profile_full_name' ); ?></h3>
                            <p><?php the_sub_field( 'profile_designation' ); ?></p>
                            <a href="#<?=$fName.$lName?>" class="uk-text-meta" uk-toggle>Read Bio</a>
                        </div>
                    </div>

                    <div id="<?=$fName.$lName?>" class="biography | uk-flex-top" uk-modal>
                        <div class="uk-modal-dialog uk-margin-auto-vertical">
                            <button class="uk-modal-close-default" type="button" uk-close aria-label="Close Modal"></button>

                            <div uk-grid>
                                <div class="uk-width-1-3@s">
                                    <figure>
                                        <?php $avatar = get_sub_field( 'profile_photo' );
                                        echo wp_get_attachment_image( $avatar['id'], [ 300, 300, true ] ); ?>
                                    </figure>
                                </div>
                                <div class="uk-width-2-3@s">
                                    <div class="uk-h3"><?php the_sub_field( 'profile_full_name' ); ?></div>
                                    <p><?php the_sub_field( 'profile_designation' ); ?></p>
                                    <?php the_sub_field( 'profile_bio' ); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            endwhile; ?>
            </div>

        </div>
    </section>

    <section class="team marketing | uk-section">
        <div class="uk-container">

            <div class="team-wrapper | uk-grid-small uk-flex-center" uk-height-match="target: > div > .uk-card > p" uk-grid uk-scrollspy="target: > .team-item; cls: uk-animation-slide-bottom-medium; delay: 300">               
            <?php while ( have_rows( 'sc_team' ) ) : the_row();
                if ( get_row_index() < 2 ) {
                    $class = 'class="team-item | uk-flex uk-flex-center uk-width-1-1"';
                } else {
                    $class = 'class="team-item | uk-width-1-2 uk-width-1-4@m"';
                } ?>
                <div <?=$class?>>
                    <div class="uk-card uk-card-small uk-text-center">
                        <h3 class="uk-card-title"><?php the_sub_field( 'profile_full_name' ); ?></h3>
                        <p><?php the_sub_field( 'profile_designation' ); ?></p>
                    </div>
                </div>
                <?php
            endwhile; ?>                
            </div>

            <div class="team-wrapper | uk-grid-small uk-flex-center" uk-grid uk-scrollspy="target: > .team-item; cls: uk-animation-slide-bottom-medium; delay: 300">
                <?php while ( have_rows( 'pm_team' ) ) : the_row(); ?>
                <div class="team-item | uk-width-1-1 uk-flex uk-flex-center">
                    <div class="uk-card uk-card-small uk-text-center">
                        <h3 class="uk-card-title"><?php the_sub_field( 'profile_full_name' ); ?></h3>
                        <p><?php the_sub_field( 'profile_designation' ); ?></p>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>

            <?php /*
            <div class="uk-headings uk-margin-bottom">
                <div class="uk-h3">Partnership Associates</div>
            </div>

            <div class="team-wrapper | uk-margin-bottom" uk-scrollspy="target: > .team-item; cls: uk-animation-slide-bottom-medium; delay: 300">
                <?php while ( have_rows( 'pa_team' ) ) : the_row(); ?>
                <div class="team-item">
                    <div class="uk-card uk-card-default uk-card-body uk-text-center">
                        <h3 class="uk-card-title"><?php the_sub_field( 'profile_full_name' ); ?></h3>
                        <p><?php the_sub_field( 'profile_designation' ); ?></p>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>

            <div class="team-wrapper | uk-margin-bottom" uk-scrollspy="target: > .team-item; cls: uk-animation-slide-bottom-medium; delay: 300">
                <?php while ( have_rows( 'graphic_team' ) ) : the_row(); ?>
                <div class="team-item">
                    <div class="uk-card uk-card-default uk-card-body uk-text-center">
                        <h3 class="uk-card-title"><?php the_sub_field( 'profile_full_name' ); ?></h3>
                        <p><?php the_sub_field( 'profile_designation' ); ?></p>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
            */ ?>

        </div>
    </section>
    <?php endwhile; wp_reset_query(); ?>

    <?php 
    // Contact Us
    include( locate_template( _frg.'colophon.php', false, true ) ); ?>

</main>

<?php /*
<div id="RequestQuote" uk-modal>
    <div class="uk-modal-dialog">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <div class="uk-cover-container">
            <canvas width="390" height="275"></canvas>
            <img src="<?php echo _uri.'/resources/images/img-banner-callout.png'; ?>" alt="Request a Quote" uk-cover>
            <div class="uk-overlay uk-overlay-primary uk-position-bottom-center uk-light">
                <h2>Request A Quote</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit neque vel pellentesque.</p>
                <p class="uk-margin-top"><a href="<?php echo get_permalink( 879 ); ?>" class="uk-button uk-button-primary">Click Here</a></p>
            </div>
        </div>
    </div>
</div>
*/ ?>

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