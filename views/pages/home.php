<main id="main" class="main uk-position-relative" role="main">

    <section id="about" class="about | uk-section">
        <div class="uk-container">

            <div class="uk-margin-large-bottom" uk-slider="autoplay: true; autoplay-interval: 6500; pause-on-hover: false;">
                <div class="uk-position-relative uk-visible-toggle" tabindex="-1">

                    <div class="uk-slider-container">
                        <ul class="uk-slider-items uk-grid-collapse uk-grid-match uk-flex-middle uk-grid">
                            <?php while ( have_rows( 'behind_group' ) ) : the_row(); ?>
                            <li>
                                <div class="uk-flex-middle" uk-grid uk-margin>
                                    <figure class="media | uk-width-1-2@m"> <img src="<?php echo _uri.'/resources/images/SGGMedia-Mobile.gif'; ?>" height="720" alt=""> </figure>
                                    <figcaption class="uk-width-1-2@m uk-flex-last uk-flex-first@m">
                                        <?php the_sub_field( 'bg_whoweare_content' );
                                        /* <h2>Who We Are</h2>
                                        <p>SGG Media (“SGG”) is a social media sports marketing company, featuring over 1,000 sports Content Creator / Influencers with over 25 million avid sports Followers. SGG delivers social media branding, advertising and customer acquisitions for the nation’s largest sports and sports gaming firms including DraftKings, FanDuel, Fanatics, Prize Picks, Fliff and others.</p>
                                        */ ?>
                                    </figcaption>
                                </div>
                            </li>

                            <li>
                                <div class="uk-flex-middle" uk-grid uk-margin>
                                    <figure  class="media | uk-width-2-3@m"> <img src="<?php echo _uri.'/resources/images/img-sgg-what-we-do.jpg'; ?>" alt=""> </figure>
                                    <figcaption class="uk-width-1-3@m uk-flex-last uk-flex-first@m">
                                        <?php the_sub_field( 'bg_whatwedo_content' );
                                        /* <h2>What We Do</h2>
                                        <p>SGG Media captures the niche of social media sports culture. Our 25+ million sports fans follow SGG Media’s 1,000+ Sports Content Creators hourly for real time sports content on all the game action, trades, highlights, and legal sports betting information.</p>
                                        <p>We also provide “Highly Targeted” marketing – our advertisers can cost effectively target just one state, just one sport, or even just one team.</p>
                                        <p>SGG offers advertising partners the most cost-effective way to reach the new younger generation (21-41) of sports fans receiving their sports information solely from social media. SGG Media has created a community of sports lovers, just like us.</p>
                                        */ ?>
                                    </figcaption>
                                </div>
                            </li>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                    <a class="uk-position-center-left-out uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right-out uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                    
                </div>
                <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
            </div>
        </div>

        <div class="uk-container uk-container-small">
            <h2 id="seen-in-press" class="uk-text-center">As Seen In Press</h2>
            <ul class="uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m uk-flex-center uk-grid-margin" uk-grid>
                <?php $pressImgs = get_field('seen_in_press');
                foreach ( $pressImgs as $pressImg ) : ?>
                <li>
                    <a href="<?php echo get_permalink( 58 ); ?>">
                        <?php echo wp_get_attachment_image( $pressImg['id'], 'full' ); ?>
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>

    <?php if ( have_rows( 'introduction_group' ) ) : ?>
    <section class="goal | uk-section uk-section-muted">
        <?php while ( have_rows( 'introduction_group' ) ): the_row(); ?>
        <div class="uk-container">
            <div class="uk-headings uk-margin-medium-bottom">
                <h2><?php echo ( get_sub_field( 'ig_headings' ) ) ? get_sub_field( 'ig_headings' ) : 'U.S. Sports Betting Operators Spent <br> $300,000,000 on Advertising Past 12-Months'; ?></h2>
            </div>
            <div class="uk-grid-match" uk-grid>
                
                <div class="uk-width-1-2@m">
                    <div class="uk-panel">
                        <h3>What's Now</h3>
                        <?php the_sub_field( 'ig_whatsnow' ); 
                        // <p>SGG Media represents the growing $13 Billion Influencer Economy (2021) in a unique way – via “Micro Sports Influencers”. Our network of Sports Content Creators is comprised of avid, engaged, sports fans that follow their specific sport, league, or team via social media. SGG Media social media posting are highly targeted to provide the sports content, and advertisements that resonate with a specific sports or sports team’s demographic audience.</p>
                        ?>
                    </div>
                </div>
                <div class="uk-width-1-2@m">
                    <div class="uk-panel">
                        <h3>What's Next</h3>
                        <?php the_sub_field( 'ig_whatsnext' );
                        // <p>SGG Media is rapidly growing our data base of Content Creator / Influencers and sports fans daily. If you are a sports content creator – contact SGG to join the elite team of SGG sports influencers. If you want to reach an audience of 25+ million sports fans (ages 21 to 41) at the lowest possible ad-spend rates – contact SGG Media.</p>
                        ?>
                    </div>
                </div>
                <div class="uk-width-expand">
                    <div class="uk-panel">
                        <h3>What's Possible</h3>
                        <?php the_sub_field( 'ig_whatspossible' );
                        // <p>SGG Media is the “go to source” for all sports and sports gambling related social media. The younger generation of sports fans are “dual- screening” while watching sports on T.V. – creating their own sports eco system. Fans no longer want to be just spectators for sporting events, they wish to be part of the narrative. Today’s younger fans are getting their sports information exclusively on social media platforms like TikTok, Twitter, Instagram, and podcasts, not in the newspaper or radio talk shows. If companies are to thrive in this new environment, they must adapt to these new norms or risk fading into obscurity.</p>
                        ?>
                    </div>                    
                </div>
            </div>
        </div>
        <?php endwhile; ?>
    </section>
    <?php endif; ?>

    <section id="partners" class="partners | uk-section">
        <div class="uk-container">
            <div class="uk-headings uk-margin-medium-bottom">
                <h2><?php the_field( 'partners_title' ); ?></h2>
            </div>
            <div class="uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m uk-grid-small" uk-grid>
            <?php while ( have_rows( 'partners_group' ) ) : the_row();
                $imgPartners = get_sub_field( 'pg_photo' );
                $imgModals   = get_sub_field( 'pg_samples' );
                ?>
                <div>
                    <figure class="uk-card uk-card-secondary uk-margin-remove">
                        <?php if ( !empty($imgModals) ) : ?>
                        <div class="uk-card-badge uk-label uk-link-reset">
                            <button type="button" title="View Advertising Examples" uk-toggle="target: #ads-<?php echo $imgPartners['id']; ?>">View Ad Sample</button>
                        </div>
                        <?php endif; ?>
                        <div class="uk-card-media-top">
                            <?php echo wp_get_attachment_image( $imgPartners['id'], 'full' ); ?>                            
                        </div>
                    </figure>

                    <?php if ( !empty($imgModals) ) : ?>
                    <div id="ads-<?php echo $imgPartners['id']; ?>" class="sample-ads | uk-flex-top uk-modal-container" uk-modal>
                        <div class="uk-modal-dialog uk-margin-auto-vertical uk-text-center">
                            <button class="uk-modal-close-default" type="button" uk-close aria-label="Close Modal"></button>
                            <h3> <?php echo $imgPartners['title']; ?> <small>Advertising Example</small> </h3>
                            <div class="uk-child-width-1-2@m uk-grid-small uk-flex-top" uk-grid>
                                <?php foreach ( $imgModals as $modal ) : ?>
                                <div>
                                    <?php echo wp_get_attachment_image( $modal['id'], 'full' ); ?>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
                <?php 
            endwhile; ?>
            </div>

        </div>
    </section>

    <section id="chart" class="advertising chart | uk-section uk-section-muted">
        <div class="uk-container">

            <div class="uk-headings">
                <img src="<?php echo _uri.'/resources/images/logo-sgg-media-black.png'; ?>" class="uk-margin-medium-bottom" alt="<?php bloginfo(); ?>">
                <h2>The Most Cost Effective Sports Advertising</h2>
                <p>Advertising Cost Per 1000 Impressions (CPM)</p>
            </div>
            <div class="chart-container">
                <canvas id="myChart"></canvas>
            </div>

        </div>
    </section>

    <aside class="sbc-awards | uk-section uk-section-secondary">
        <div class="uk-container uk-text-center">
            
            <h2>SGG Media Voted Finalists for "Sports Affiliate Of The Year" - 2022 SBC Global Awards</h2>
            <div class="uk-display-block uk-text-center uk-width-expand">
                <img src="<?php echo _uri.'/resources/images/SBC-Awards-NA-trophy-logo-neg@4x-8-1.png'; ?>" width="240" alt="SBC Awards 2022">
            </div>

        </div>
    </aside>

    <section id="connection" class="advertising connection | uk-section">
        <div class="uk-container">

            <div class="uk-headings uk-text-center uk-margin-medium-bottom">
                <h2>How SGG Media Advertisers <br> Connect to Sports Fans</h2>
            </div>
            <figure class="uk-panel">
                <img src="<?php echo _uri.'/resources/images/sgg-media-graph-01.jpg' ?>" class="uk-box-shadow-medium uk-border-rounded" alt="How It Works">
            </figure>            

        </div>
    </section>

    <section id="revenue" class="advertising revenue | uk-section uk-section-muted">
        <div class="uk-container">

            <div class="uk-headings uk-text-center uk-margin-medium-bottom">
                <h2>SGG Media Revenue Streams</h2>
            </div>
            <figure class="uk-panel uk-text-center">
                <img src="<?php echo _uri.'/resources/images/sgg-media-graph-02.jpg' ?>" class="uk-box-shadow-medium uk-border-rounded" alt="SGG Revenue Streams">
            </figure>

        </div>

    </section>

    <section class="micro-influencer | uk-section uk-section-secondary">
        <div class="uk-container uk-container-small">
            <article class="uk-article">
                <h2 class="uk-text-center">What Is A "Micro- Influencer"?</h2>
                <figure class="uk-text-center"><img src="<?php echo _uri.'/resources/images/Beige-Pyramid-Chart-Social-Media-Influencer-Tier-Infographic-Instagram-Post.jpg.webp'; ?>" width="640" alt=""></figure>
                <p>SGG Micro Influencers or "Content Creators" typically have 30,000 to 100,000 avid sports fan followers, as opposed to "Macro or Mega" Influencers (think Tom Brady or Kim Kardashian).</p> 
                <p>These Micro Content Creators post daily - everything about their specific sport's team, or league. For instance, the Cleveland Browns NFL Team, or the L.A. Lakers NBA team have several top Micro Influencers that will post on their blog, web site, and social media sites all the in-depth information their avid Followers want. When these fans receive a post from their team's Influencer- they are highly engaged! And when they receive an advertisement (from SGG and our Ad partners) they are far more likely to interact with that advertisement than from any other ad source.</p> 
                <p>These Influencers are singularly too small to sign major advertisers – but SGG has aggregated over 1,300 of them and combined with our in-house team of SGG graphic artists creating custom social media advertisements and postings, provides a "Turn- Key" social media advertising solution for national advertisers.</p>
                <blockquote>
                    <p>"About 90% of the marketers consider ROI from influencer marketing comparable to or better than other marketing channels. The influencers are seen as trustworthy experts in their relative field by their followers, leading them to hold the power to influence their audience’s purchase decisions."</p>
                    <footer>Backspace 2022</footer>
                </blockquote>
            </article>
        </div>
    </section>


    <?php $team = [ 'post_type' => 'page', 'page_id' => 124 ];
    query_posts( $team ); 

    while ( have_posts() ) : the_post(); ?>
    <section id="team" class="team executive | uk-section">
        <div class="uk-container uk-container-small">

            <div class="uk-headings uk-margin-medium-bottom">
                <small>Our Professional</small>
                <h2>Management Team</h2>
                <p>A Division of Sports Gambling Guides, Inc.</p>
            </div>

            <div class="team-wrapper" uk-scrollspy="target: > .team-item; cls: uk-animation-slide-bottom-medium; delay: 300">
            <?php while ( have_rows( 'management_team' ) ) : the_row(); 
                $fullName = explode(" ", get_sub_field( 'profile_full_name' ));
                $fName    = strtolower(substr($fullName[0], 0, 1));
                $lName    = strtolower($fullName[1]); ?>
                <div class="team-item">
                    <div class="uk-card uk-card-primary">
                        <div class="uk-card-media-top">
                            <a href="#<?=$fName.$lName?>" uk-toggle>
                                <?php $avatar = get_sub_field( 'profile_photo' );
                                echo wp_get_attachment_image( $avatar['id'], [ 300, 300, true ] ); ?>
                            </a>
                        </div>
                        <div class="uk-card-body">
                            <h3 class="uk-card-title"><?php the_sub_field( 'profile_full_name' ); ?></h3>
                            <p><?php the_sub_field( 'profile_designation' ); ?></p>
                            <a href="#<?=$fName.$lName?>" class="uk-link-reset uk-text-meta" uk-toggle>Read Bio</a>
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

    <section class="team marketing | uk-section uk-padding-remove-top">
        <div class="uk-container uk-container-small">

            <div class="uk-headings uk-margin-medium-bottom">
                <small>SGG Media</small>
                <h2>Social Media Team</h2>
            </div>

            <div class="team-wrapper | uk-margin-bottom" uk-scrollspy="target: > .team-item; cls: uk-animation-slide-bottom-medium; delay: 300">               
            <?php while ( have_rows( 'sc_team' ) ) : the_row();
                if ( get_row_index() < 3 ) {
                    $class = 'class="team-item | uk-width-1-2"';
                } else {
                    $class = 'class="team-item | uk-width-1-3"';
                } ?>
                <div <?=$class?>>
                    <div class="uk-card uk-card-default uk-card-body uk-text-center">
                        <h3 class="uk-card-title"><?php the_sub_field( 'profile_full_name' ); ?></h3>
                        <p><?php the_sub_field( 'profile_designation' ); ?></p>
                    </div>
                </div>
                <?php
            endwhile; ?>                
            </div>

            <div class="team-wrapper | uk-margin-bottom" uk-scrollspy="target: > .team-item; cls: uk-animation-slide-bottom-medium; delay: 300">
                <?php while ( have_rows( 'pm_team' ) ) : the_row(); ?>
                <div class="team-item">
                    <div class="uk-card uk-card-default uk-card-body uk-text-center">
                        <h3 class="uk-card-title"><?php the_sub_field( 'profile_full_name' ); ?></h3>
                        <p><?php the_sub_field( 'profile_designation' ); ?></p>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>

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

        </div>
    </section>
    <?php endwhile; wp_reset_query(); ?>

    <?php 
    // Contact Us
    include( locate_template( _frg.'colophon.php', false, true ) ); ?>

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