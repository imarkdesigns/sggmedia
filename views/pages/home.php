<?php get_template_part( _nav ); 

// Team Init
$team = [ 'post_type' => 'page', 'page_id' => 124 ];
query_posts( $team ); ?>

<main id="main" class="main m-scene" role="main">

    <div id="sgg-section">
        <section id="hero" class="home-hero | section fp-auto-height">
            <figure>
                <div class="uk-position-relative" uk-slideshow="autoplay: true; animation: fade; autoplay-interval: 5000; pause-on-hover: false">
                    <ul class="uk-slideshow-items" uk-height-viewport="min-height: 960">
                        <li>
                            <div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-bottom-left">
                                <img src="<?php echo _uri.'/resources/images/header/img-sggmedia-header-pt3.jpg'; ?>" alt="" uk-cover>
                            </div>
                        </li>
                        <li>
                            <div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-top-right">
                                <img src="<?php echo _uri.'/resources/images/header/img-sggmedia-header-pt2.jpg'; ?>" alt="" uk-cover>
                            </div>
                        </li>
                        <li>
                            <div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left">
                                <img src="<?php echo _uri.'/resources/images/header/img-sggmedia-header-pt1.jpg'; ?>" alt="" uk-cover>
                            </div>
                        </li>                        
                    </ul>

                    <figcaption class="uk-overlay uk-position-center-left">
                        <div class="uk-width-1-1@s uk-width-1-2@m uk-light | hero-container">
                            <?php $hdr_content = get_field( 'bg_content', 'options' );
                            echo $hdr_content; ?>
                        </div>
                    </figcaption>
                </div>
            </figure>

            <?php if ( !wp_is_mobile() ) :
            if ( !is_page([ 302, 358, 650, 700 ]) ) : 
            $followers   = str_replace( ',', '', get_field( 'sm_followers', 'options' ) );
            $influencers = get_field( 'sm_influencers', 'options' );
            $impressions = str_replace( ',', '', get_field( 'sm_impressions', 'options' ) ); ?>
            <aside class="uk-position-top uk-background-muted uk-grid-collapse uk-grid-match uk-flex-middle uk-position-z-index | ticker" uk-grid uk-height-match="target: > div > .uk-card">
                <div>
                    <div class="uk-card uk-card-secondary | followers">
                        <div class="uk-card-body">
                            <div class="uk-card-title">Social Media Followers</div>
                            <span id="total-followers" class="animate__animated" data-followers="<?=$followers?>"> <small>fetching data...</small> </span>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-secondary | influencers">
                        <div class="uk-card-body">
                            <div class="uk-card-title">Influencers</div>
                            <span id="total-influencers" data-influencers="<?=$influencers?>"> <small>fetching data...</small> </span>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-secondary | impressions">
                        <div class="uk-card-body">
                            <div class="uk-card-title">30 Days' Impressions</div>
                            <span id="total-impressions" class="animate__animated" data-impressions="<?=$impressions?>"> <small>fetching data...</small> </span>
                        </div>
                    </div>
                </div>
            </aside>
            <?php endif;
            endif; // mobile
            // End widget stats ?>

            <aside class="sponsor | uk-position-bottom uk-margin-remove uk-background-secondary uk-light uk-flex uk-flex-center uk-visible@m" uk-alert hidden>
                <div class="uk-container">
                    <div class="uk-child-width-auto uk-grid-collapse uk-flex-middle" uk-grid>
                        <img src="<?php echo _uri.'/resources/images/articles/iGB-logo.png'; ?>" alt="iGB - I Gaming Business">
                        <p class="uk-margin-remove">I Gaming Business' Interview with Troy Paul: Are US Sportsbooks Ready For The Age of the Influencer?</p>
                    </div>
                </div>
            </aside>
        </section>

        <section id="about" class="about | section">
            <div id="sgg-clients">
                <h2 class="uk-heading-divider">SGG Media Clients</h2>
                <div class="carouselTicker">
                    <ul class="carouselTicker__list">
                        <?php $arr_logo = [ 'fliff', 'fanatics', 'blk-water', 'bt', 'dabble', 'draftkings', 'fanduel', 'frontrunner', 'joint-chiropractic', 'rithmm', 'takes-live' ];
                        for ( $n = 0; $n < count($arr_logo); $n++ ) {
                            $carousel  = '<li class="carouselTicker__list">';
                            $carousel .= '<img src="'._uri.'/resources/images/partners/ticker/img-logo-'.$arr_logo[$n].'.jpg" alt="'.$arr_logo[$n].'">';
                            $carousel .= '</li>';
                            echo $carousel;
                        } ?>
                    </ul>
                </div>
            </div>

            <div class="uk-container uk-container-expand uk-margin-medium">
                <div class="uk-child-width-1-2@m uk-flex-middle" uk-grid>
                    <div class="column-media">
                        <img src="<?php echo _uri.'/resources/images/change-the-game.gif'; ?>" alt="Social Media Marketing is Changing the Game" uk-scrollspy="cls: uk-animation-scale-up uk-transform-origin-top-center; delay: 600; repeat: true">
                    </div>
                    <div class="column-content">
                        <article class="uk-article">
                            <div class="about-section-one" uk-scrollspy="cls: uk-animation-slide-bottom-medium; delay: 600; repeat: true">
                                <h2 class="about-headline">Who We Are</h2>
                                <ul>
                                    <li>SGG Media is a social media sports advertising company with a network of thousands of micro-influencers connecting advertisers with our tens of millions of sports fans.</li>
                                    <li>Provides turn-key advertising for our customers creating content, graphics and targeted postings to millions of sports fans.</li>
                                    <li>Delivers tailored expertise and strategies that significantly enhances a company's presence and engagement.</li>
                                    <li>SGG's "Instant Quote" online platform provides an advertising quote in seconds.</li>
                                    <li>Produces successful video content (Splash Sisters) and live sports shows (Live Drive).</li>
                                </ul>
                            </div>
                            <div class="about-section-two" uk-scrollspy="cls: uk-animation-slide-bottom-medium; delay: 900; repeat: true">
                                <h2 class="about-headline">What We Do</h2>
                                <ul>
                                    <li>SGG delivers social media branding and advertising via cost-effective micro-influencers.</li>
                                    <li>Creates personalized and unique ads tailored to the specific needs of each company.</li>
                                    <li>Delivers advertising at a fraction of the cost of traditional advertising.</li>
                                    <li>Provide Highly targeted marketing - Regionally or National.</li>
                                    <li>Works with the nation's largest sports companies i.e. Draft Kings, Fan Duel and Fanatics.</li>
                                    <li>SGG Produces exciting live streaming sports shows and sports videos</li>
                                </ul>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <section id="ads-posting" class="ads | section">
            <div class="uk-container uk-container-large">
                
                <div class="uk-grid-small uk-child-width-1-2@l" uk-grid>
                    
                    <div>
                        <header class="uk-flex uk-flex-middle uk-flex-center uk-text-center uk-background-primary uk-width-1-1 uk-height-small uk-light uk-margin-bottom">
                            <h2>Social Media <br> Ad Postings</h2>    
                        </header>
                        <div class="uk-child-width-1-3@s uk-grid-small uk-grid-match" uk-grid uk-scrollspy="cls: uk-animation-slide-bottom-medium; delay: 300; repeat: true">
                            <div><img src="<?php echo _uri.'/resources/images/ads/ads-postings_01.jpg'; ?>" alt=""></div>
                            <div><img src="<?php echo _uri.'/resources/images/ads/ads-postings_02.jpg'; ?>" alt=""></div>
                            <div><img src="<?php echo _uri.'/resources/images/ads/ads-postings_03.jpg'; ?>" alt=""></div>
                            <div><img src="<?php echo _uri.'/resources/images/ads/ads-postings_04.jpg'; ?>" alt=""></div>
                            <div><img src="<?php echo _uri.'/resources/images/ads/ads-postings_05.jpg'; ?>" alt=""></div>
                            <div><img src="<?php echo _uri.'/resources/images/ads/ads-postings_06.jpg'; ?>" alt=""></div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-grid-small" uk-grid>
                            <div class="uk-width-1-3@s">
                                <header class="uk-flex uk-flex-middle uk-flex-center uk-text-center uk-background-secondary uk-width-1-1 uk-height-small uk-light uk-margin-bottom">
                                    <h2>Franchise <br> Ad Content</h2>
                                </header>
                                <div class="uk-child-width-1-1 uk-grid-small uk-grid-match" uk-grid uk-scrollspy="cls: uk-animation-slide-bottom-medium; delay: 600; repeat: true">
                                    <div><img src="<?php echo _uri.'/resources/images/ads/ads-content_01.jpg'; ?>" alt=""></div>
                                    <div><img src="<?php echo _uri.'/resources/images/ads/ads-content_02.jpg'; ?>" alt=""></div>
                                </div>
                            </div>
                            <div class="uk-width-2-3@s">
                                <header class="uk-flex uk-flex-middle uk-flex-center uk-text-center uk-background-primary uk-width-1-1 uk-height-small uk-light uk-margin-bottom">
                                    <h2>Shows <br> Produced</h2>
                                </header>
                                <div class="uk-child-width-1-2@s uk-grid-small uk-grid-match" uk-grid uk-scrollspy="cls: uk-animation-slide-bottom-medium; delay: 900; repeat: true">
                                    <div><img src="<?php echo _uri.'/resources/images/ads/ads-shows_01.jpg'; ?>" alt=""></div>
                                    <div><img src="<?php echo _uri.'/resources/images/ads/ads-shows_02.jpg'; ?>" alt=""></div>
                                    <div><img src="<?php echo _uri.'/resources/images/ads/ads-shows_03.jpg'; ?>" alt=""></div>
                                    <div><img src="<?php echo _uri.'/resources/images/ads/ads-shows_04.jpg'; ?>" alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <section id="online-quote" class="quote | uk-background-cover section" data-src="<?php echo _uri.'/resources/images/abstract-blur-white-background-design-scaled.jpg'; ?>" uk-img>
            <div class="uk-container uk-container-small">
                <?php echo do_shortcode( '[formidable id=12]' ); ?>
            </div>
        </section>

        <section id="micro-influencer" class="micro-influencer | section">
            <div class="uk-child-width-1-2@l uk-grid-match uk-flex-middle" uk-grid>
                <div class="column-content">
                    <article class="uk-article">
                        <div uk-scrollspy="cls: uk-animation-slide-bottom-medium; delay: 300; repeat: true">
                            <h2 class="mi-headline">What is a Micro <br> <span class="uk-text-secondary">Influencer?</span></h2>
                            <p>Micro-Influencers are small accounts that have between 10,000 and 100,000 sports fan followers.</p>
                            <p>Micro-Influencers are social media content creators who focus on specific niches within regional and national markets.</p>
                        </div>

                        <picture uk-scrollspy="cls: uk-animation-slide-bottom-medium; delay: 600; repeat: true">
                            <img src="<?php echo _uri.'/resources/images/micro-influencer-graph.png'; ?>" class="uk-box-shadow-large" alt="Social Media Influencers Tiers">
                        </picture>
                    </article>
                </div>
                <div class="column-media | uk-flex uk-flex-middle uk-flex-center">
                    <div class="video-container" uk-scrollspy="cls: uk-animation-fade; delay: 600; repeat: true">
                        <video poster="https://sggmedia.com/wp-content/uploads/2023/09/screenshot.png" width="640" height="360" class="uk-position-relative uk-position-z-index" controls playsinline uk-video="autoplay: false">
                            <source src="<?php echo _uri.'/resources/video/Final-HD.webm'; ?>" type="video/webm">
                            <source src="<?php echo _uri.'/resources/video/Final-HD.mp4'; ?>" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </section>

        <section id="live-drive" class="live-drive | section">
            <div class="uk-grid-collapse uk-grid-match uk-flex-middle" uk-grid>
                <div class="column-media | uk-width-1-2@l">
                    <picture uk-scrollspy="cls: uk-animation-slide-left-medium; delay: 300; repeat: true">
                        <img src="<?php echo _uri.'/resources/images/img-banner-livedrive.jpg'; ?>" alt="LiveDrive">
                    </picture>
                </div>
                <div class="column-content | uk-width-1-2@l uk-flex uk-flex-center">
                    <div class="uk-card" uk-scrollspy="cls: uk-animation-slide-right-medium; delay: 600; repeat: true">
                        <div class="uk-card-body">
                            <h2 class="ld-headline">Live Drive is a streaming live sport show produced by sgg media and hosted by gavin mchugh</h2>
                            <a href="https://www.youtube.com/@livedrivestream" target="_blank"><img src="<?php echo _uri.'/resources/images/img-livedrive-url.png'; ?>" alt="YouTube"></a>
                            <p>The show provides an opportunity for sports fans to "Dual Screen” on laptops and cell phones while watching NFL Red Zone and live football games in progress. The colorful host, Gavin McHugh, gives out his favorite betting recommendations, especially "prop" and in game betting opportunities, invites audience participation, and invites live guests on the streaming sports show.</p>
                        </div>
                        <div class="uk-card-footer">
                            <h3 class="ld-subhead">Live Drive will be streamed on</h3>
                            <ul class="uk-subnav">
                                <li><img src="<?php echo _uri.'/resources/images/icon-tiktok.png'; ?>" width="44" alt="TikTok"></li>
                                <li><img src="<?php echo _uri.'/resources/images/icon-instagram.png'; ?>" width="44" alt="Instagram"></li>
                                <li><img src="<?php echo _uri.'/resources/images/icon-twitter.png'; ?>" width="44" alt="Twitter"></li>
                                <li><img src="<?php echo _uri.'/resources/images/icon-twitch.png'; ?>" width="44" alt="Twitch"></li>
                            </ul>
                            <a href="https://www.youtube.com/@livedrivestream" target="_blank" rel="follow">@livedrivestream</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="franchise" class="franchise | section">
            <div class="uk-container uk-container-expand">

                <div class="uk-child-width-1-2@m uk-grid-large uk-grid-match uk-flex-middle" uk-grid>
                    <div class="column-content">
                        <article class="uk-article" uk-scrollspy="cls: uk-animation-slide-left-medium; delay: 300; repeat: true">
                            <h2 class="franchise-headline">Grow Your Business with Franchise Advertising</h2>
                            <p>Reach Your Audience In All 50 States With Cost Effective Social Media Advertising</p>
                            <p>Including sports micro-influencers for your franchise marketing offers several valuable benefits. SGG's social media advertising brings tailored expertise, fan-focused strategies, real-time updates, and industry-specific insight that will significantly enhance franchise's social media presence, engagement, and overall success with our network of thousands of micro-influencers and their tens of millions of sports fans.</p>
                            <h3 class="franchise-subhead">Here's why micro-influencers are so invaluable for franchise marketing:</h3>
                            <ul>
                                <li><strong>Niche Expertise:</strong> Sports Micro-influencers have a niche focus, such as specific local teams, which aligns well with the franchise's target audience. This allows for more targeted marketing efforts, reaching people who are genuinely interested in the franchise's products or service.</li>
                                <li><strong>Cost-Effectiveness:</strong> Making it an affordable option for franchises with limited marketing budgets.</li>
                                <li><strong>Geographic Relevance:</strong> For Franchises with multiple locations, micro influencers based in specific regions and specific sports teams, targets the local audience effectively. This approach will drive foot traffic and engagement at individual franchise locations.</li>
                                <li><strong>Engagement and Reach:</strong> Micro-Influencers have higher engagement rates since they have a smaller, more dedicated following and their posts are likely to be seen, commented on and shared.</li>
                            </ul>
                        </article>
                    </div>
                    <div class="column-media">
                        <picture uk-scrollspy="cls: uk-animation-scale-up; delay: 600; repeat: true">
                            <img src="<?php echo _uri.'/resources/images/img-the-joint-chiropractic.jpg'; ?>" alt="The Joint Chiropractic">
                        </picture>
                    </div>
                </div>

            </div>
        </section>

        <section id="followers-chart" class="followers-chart | section">
            <div class="uk-container uk-container-expand">

                <div class="uk-grid-match uk-grid-collapse uk-flex-middle uk-flex-center" uk-grid>
                    <div class="column-media | uk-width-1-2@m uk-flex uk-flex-center uk-flex-middle" uk-scrollspy="cls: uk-animation-slide-top; delay: 300; repeat: true">
                        <figure class="headings | uk-text-center uk-padding">
                            <img src="<?php echo _uri.'/resources/images/logo-sgg-media-black.png'; ?>" alt="SGG Media">
                            <h2 class="fc-headline">#3 IN SPORTS SOCIAL <br> Media Followers</h2>
                        </figure>
                    </div>
                    <div class="column-media-chart | uk-width-1-2@m uk-flex uk-flex-middle" uk-scrollspy="cls: uk-animation-slide-right-medium; delay: 600; repeat: true">
                        <picture class="uk-display-block">
                            <img src="<?php echo _uri.'/resources/images/img-followers-chart.png'; ?>" alt="Social Media Influencer & Followers Chart">
                        </picture>
                    </div>
                </div>

            </div>
        </section>

        <section id="graph" class="graph | section">
            <div class="uk-container uk-container-expand">

                <div class="graph-container">
                    <header class="uk-panel uk-text-center" uk-scrollspy="cls: uk-animation-scale-up; delay: 300; repeat: true">
                        <img src="<?php echo _uri.'/resources/images/logo-sgg-media-black.png'; ?>" class="uk-margin-small-bottom" alt="<?php bloginfo(); ?>">
                        <h2 class="graph-headline">The Most Cost Effective Sports Advertising</h2>
                        <p class="uk-text-lead uk-heading-line"><span>online advertising quote in seconds</span></p>
                        <p class="uk-text-uppercase">Advertising Cost Per 1000 Impressions (CPM)</p>

                        <h3 class="graph-subhead">Traditional Marketing Can Cost Hundreds Of Thousand Of Dollars Social Media Micro-Influencer Marketing Can Cost As Little As $1000 A Campaign.</h3>
                    </header>

                    <figure class="chart-container" uk-scrollspy="cls: uk-animation-slide-bottom-medium; delay: 600; repeat: true">
                        <canvas id="SGGChart"></canvas>
                    </figure>
                </div>

            </div>
        </section>

        <section id="team" class="team | section">
            <?php while ( have_posts() ) : the_post(); ?>

            <div class="slide" data-anchor="slide1">
            
                <div class="uk-container">
                    <header class="uk-panel" uk-scrollspy="cls: uk-animation-fade-medium; delay: 300; repeat: true">
                        <p>Our Professional</p>
                        <h2 class="team-headline">Management Team</h2>
                        <p>A Division of Sports Gambling Guides, Inc.</p>
                    </header>

                    <div class="executives | uk-child-width-auto@s uk-flex-center" uk-grid uk-scrollspy="target: > .column-content > .uk-card; cls: uk-animation-slide-bottom-medium; delay: 300; repeat: true">
                        <?php $n = 1;
                        while ( have_rows( 'management_team' ) ) : the_row();
                            $fn = explode(" ", get_sub_field( 'profile_full_name' ));
                            $fsn = strtolower(substr($fn[0], 0, 1));
                            $lsn = strtolower($fn[1]); 
                            $n++; ?>
                            <div class="column-content">
                                <div class="uk-card">
                                    <div class="uk-card-media-top">
                                        <?php $avatar = get_sub_field( 'profile_photo' );
                                        echo wp_get_attachment_image( $avatar['id'], [300, 300] ); ?>
                                    </div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title"><?php the_sub_field( 'profile_full_name' ); ?></h3>
                                        <p><?php the_sub_field( 'profile_designation' ); ?></p>
                                        <p><a href="#managementTeam/slide<?=$n;?>" class="uk-text-meta">Read Bio</a></p>
                                    </div>
                                </div>

                                <div id="<?=$fsn.$lsn?>" class="biography | uk-flex-top" uk-modal>
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
                        <?php endwhile; ?>
                    </div>
                </div>

                <div class="uk-container uk-container-small">
                    <div class="marketing | uk-child-width-auto@s uk-grid-small uk-grid-match uk-flex-center" uk-grid uk-height-match="target: > div > .uk-card > p" uk-scrollspy="target: > div > .uk-card; cls: uk-animation-slide-bottom-medium; delay: 300; repeat: true">
                        <?php while ( have_rows( 'sc_team' ) ) : the_row();
                        $fn = explode(" ", get_sub_field( 'profile_full_name' )); ?>
                        <div class="-<?=strtolower($fn[1]);?>">
                            <div class="uk-card uk-card-body uk-card-small uk-text-center">
                                <h3 class="uk-card-title"><?php the_sub_field( 'profile_full_name' ); ?></h3>
                                <p><?php the_sub_field( 'profile_designation' ); ?></p>
                            </div>
                        </div>
                        <?php endwhile;
                        
                        while ( have_rows( 'pm_team' ) ) : the_row();
                        $fn = explode(" ", get_sub_field( 'profile_full_name' )); ?>
                        <div class="-<?=strtolower($fn[1]);?>">
                            <div class="uk-card uk-card-body uk-card-small uk-text-center">
                                <h3 class="uk-card-title"><?php the_sub_field( 'profile_full_name' ); ?></h3>
                                <p><?php the_sub_field( 'profile_designation' ); ?></p>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    </div>
                </div>

            </div>
            <!-- Slide 1 -->

            <?php $n = 1;
            while ( have_rows( 'management_team' ) ) : the_row();
                $n++; ?>
                <div class="slide" data-anchor="slide<?=$n;?>">
                    <div class="uk-container">
                        <ul class="uk-subnav uk-subnav-pill" uk-margin>
                            <li><a href="#managementTeam/slide1">Management Team</a></li>
                            <li><a href="#managementTeam/slide2">Troy Paul</a></li>
                            <li><a href="#managementTeam/slide3">Mark Paul</a></li>
                        </ul>

                        <article class="bio | uk-article uk-padding-large" uk-grid>

                            <figure class="uk-width-1-1 uk-width-auto@m">
                                <?php $avatar = get_sub_field( 'profile_photo' );
                                echo wp_get_attachment_image( $avatar['id'], [ 300, 300, true ] ); ?>
                                <h2><?php the_sub_field( 'profile_full_name' ); ?></h2>
                                <p><?php the_sub_field( 'profile_designation' ); ?></p>
                            </figure>
                            <figcaption class="uk-width-1-1 uk-width-expand@m">
                                <?php the_sub_field( 'profile_bio' ); ?>
                            </figcaption>
                        </article>
                    </div>
                </div>
                <!-- Slide <?=$n;?> -->
            <?php endwhile; // End Rows
            
            endwhile; wp_reset_query(); ?>
        </section>

        <section class="colophon | section fp-auto-height">
            <?php // Colophon Settings
            $ci_content = get_field( 'contact_info_content', 'options' );
            $ci_bgPhoto = get_field( 'contact_info_bg', 'options' ); ?>
            <div class="uk-container uk-container-expand uk-padding-remove | contact-info" data-src="<?php echo $ci_bgPhoto['url']; ?>" uk-img>
                <article class="uk-article uk-width-xlarge uk-padding-large uk-light" uk-scrollspy="target: > div > .uk-card; cls: uk-animation-slide-bottom-medium; delay: 300; repeat: true">
                    <?php echo $ci_content; ?>
                </article>
            </div>
        </section>

        <section class="global-footer | section fp-auto-height">
            <?php get_template_part( _ftr ); ?>
        </section>

    </div>
    <!-- End SGG Section -->

</main>

<div id="quote-ads" class="uk-position-fixed uk-position-bottom-right uk-position-z-index" uk-alert uk-scrollspy="cls: uk-animation-slide-right; delay: 300">
    <button class="uk-alert-close" title="Close this window" uk-close></button>
    <div class="uk-card uk-margin-remove">
        <div class="uk-card-media-top">
            <img src="<?php echo _uri.'/resources/images/banner-quote.png' ?>" alt="Get An Advertising Quote In Seconds">
        </div>
    </div>
    <div class="uk-overlay uk-position-bottom-center uk-text-center uk-padding-remove">
        <h2>Get An Advertising <span class="uk-light">Quote In Seconds</span></h2>
        <a href="<?php echo get_permalink( 879 ); ?>" class="uk-button uk-button-small uk-button-primary uk-margin-top">Click Here</a>
    </div>
</div>