<?php get_template_part( _nav ); 

// Team Init
$team = [ 'post_type' => 'page', 'page_id' => 124 ];
query_posts( $team ); ?>

<main id="main" class="main m-scene" role="main">

    <div id="sgg-section">
        <section id="hero" class="home-hero | section fp-auto-height">
            <figure>
                <?php while ( have_rows( 'header_section' ) ) : the_row(); 
                $imgs = get_sub_field( 'hdr_slides' ); ?>
                <div class="uk-position-relative" uk-slideshow="autoplay: true; animation: fade; autoplay-interval: 5000; pause-on-hover: false">
                    <ul class="uk-slideshow-items" uk-height-viewport="min-height: 960">
                        <?php $n = 0;
                        $transform = [ 'uk-transform-origin-bottom-left', 'uk-transform-origin-bottom-right', 'uk-transform-origin-center-top', 'uk-transform-origin-bottom-center' ];
                        foreach ( $imgs as $img ) : $n++; ?>
                        <li>
                            <div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin- <?=$transform[$n];?>">
                                <?php echo wp_get_attachment_image( $img['id'], 'full', '', [ 'uk-cover' => '' ] ); ?>
                            </div>
                        </li>
                        <?php endforeach; ?>
                    </ul>

                    <figcaption class="uk-overlay uk-position-center-left">
                        <div class="uk-width-1-1@s uk-width-2-3@m uk-light | hero-container">
                            <picture class="uk-display-block uk-margin-bottom">
                                <img src="<?php echo _uri.'/resources/images/logo-sggmedia-200.png'; ?>" alt="SGG Media Logo 200">
                            </picture>
                            <?php the_sub_field( 'hdr_content' ); ?>
                        </div>
                    </figcaption>
                </div>
                <?php endwhile; ?>
            </figure>

            <?php if ( !wp_is_mobile() ) :
            if ( !is_page([ 302, 358, 650, 700 ]) ) : 
            $followers   = str_replace( ',', '', get_field( 'sm_followers', 'options' ) );
            $influencers = get_field( 'sm_influencers', 'options' );
            $impressions = str_replace( ',', '', get_field( 'sm_impressions', 'options' ) ); ?>
            <aside class="uk-background-muted uk-grid-collapse uk-grid-match uk-flex-middle uk-position-z-index | ticker" uk-grid uk-height-match="target: > div > .uk-card">
                <div>
                    <div class="uk-card uk-card-secondary | followers">
                        <div class="uk-card-body">
                            <div class="uk-card-title">Social Media Followers</div>
                            <span id="total-followers" class="total-followers | animate__animated" data-followers="<?=$followers?>"> <small>fetching data...</small> </span>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-secondary | influencers">
                        <div class="uk-card-body">
                            <div class="uk-card-title">Influencers</div>
                            <span id="total-influencers" class="total-influencers" data-influencers="<?=$influencers?>"> <small>fetching data...</small> </span>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-secondary | impressions">
                        <div class="uk-card-body">
                            <div class="uk-card-title">30 Days' Impressions</div>
                            <span id="total-impressions" class="total-impressions | animate__animated" data-impressions="<?=$impressions?>"> <small>fetching data...</small> </span>
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
                <h2 class="uk-heading-divider"><?php the_field( 'fp_about-headings' ); ?></h2>
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

            <?php while ( have_rows( 'fp_about-contents' ) ) : the_row();
            $aboutAnchor = strtolower(str_replace(' ', '-', get_sub_field( 'sgg_about-title' ))); ?>
            <div class="slide" data-anchor="<?php echo $aboutAnchor; ?>">
                <div class="uk-container uk-container-expand uk-margin-medium">
                    <div class="uk-child-width-1-2@m uk-grid-match uk-flex-middle" uk-grid>
                        <div class="column-media">
                            <figure>
                                <?php $gifBanner = get_field( 'fp_about-banner' );
                                echo wp_get_attachment_image( $gifBanner['id'], 'full', '', [ 'uk-scrollspy' => 'cls: uk-animation-scale-up uk-transform-origin-top-center; delay: 600; repeat: true' ] ); ?>
                            </figure>
                        </div>
                        <div class="column-content">
                            <article class="uk-article">
                                <div class="about-section-one" uk-scrollspy="cls: uk-animation-slide-bottom-medium; delay: 600; repeat: true">
                                    <h2 class="about-headline"><?php the_sub_field( 'sgg_about-title' ); ?></h2>
                                    <?php the_sub_field( 'sgg_about' ); ?>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </section>

        <?php $vsBG = get_field( 'fp_videoShows-background' ); ?>
        <section class="video-show | uk-background-cover section" data-src="<?php echo ($vsBG) ? $vsBG['url']:''; ?>" uk-img>
            <div class="uk-container">
                <header class="uk-text-center">
                    <h2><?php the_field( 'fp_videoShows-headings_pt1' ); ?> <br> <span class="uk-text-success"><?php the_field( 'fp_videoShows-headings_pt2' ); ?></span></h2>
                </header>
                
                <div class="uk-child-width-1-2@m" uk-grid>
                    <?php while ( have_rows( 'fp_videoShows' ) ) : the_row(); ?>
                    <div class="column-media">
                        <figure uk-lightbox="video-autoplay: true">
                            <?php $cover = get_sub_field( 'videoCover' );
                            $type = get_sub_field( 'select_video_source' );
                            
                            if ( $type == 'file' ) {
                                $fileType = get_sub_field( 'videoFile' );
                                $fileType = $fileType['url'];
                            } else {
                                $fileType = get_sub_field( 'videoLink' );
                            } ?>
                            <a href="<?php echo $fileType; ?>" data-attrs="width: 1280; height: 720;" data-alt="Live Drive Video" <?php echo ($type == 'file') ? 'data-type="video"' : ''; ?>>
                                <?php echo wp_get_attachment_image( $cover['id'], 'medium' ); ?>
                            </a>
                        </figure>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </section>

        <?php $adsBG = get_field( 'fp_ads-background' ); ?>
        <section id="ads-posting" class="ads | uk-background-cover section" data-src="<?php echo ($adsBG) ? $adsBG['url']:''; ?>" uk-img>
            <div class="uk-container uk-container-large">
                
                <div class="uk-grid-small uk-child-width-1-2@l" uk-grid>
                    <div>
                    <?php while ( have_rows( 'column3' ) ) : the_row(); ?>
                        <header class="uk-flex uk-flex-middle uk-flex-center uk-text-center uk-background-primary uk-width-1-1 uk-height-small uk-light uk-margin-bottom">
                            <h2><?php do_action( 'hdr', get_sub_field( 'colum3_headline' ) ); ?></h2>
                        </header>
                        <div class="uk-child-width-1-3@s uk-grid-small uk-grid-match" uk-grid uk-scrollspy="cls: uk-animation-slide-bottom-medium; delay: 300; repeat: true">
                            <?php $column3 = get_sub_field( 'colum3_media' );
                            foreach ( $column3 as $ads ) {
                                echo wp_get_attachment_image( $ads['id'], 'full' );
                            } ?>
                        </div>
                    <?php endwhile; ?>
                    </div>
                    <div>
                        <div class="uk-grid-small" uk-grid>
                            <div class="uk-width-1-3@s">
                            <?php while ( have_rows( 'column1' ) ) : the_row(); ?>
                                <header class="uk-flex uk-flex-middle uk-flex-center uk-text-center uk-background-secondary uk-width-1-1 uk-height-small uk-light uk-margin-bottom">
                                    <h2><?php do_action( 'hdr', get_sub_field( 'colum1_headline' ) ); ?></h2>
                                </header>
                                <div class="uk-child-width-1-1 uk-grid-small uk-grid-match" uk-grid uk-scrollspy="cls: uk-animation-slide-bottom-medium; delay: 600; repeat: true">
                                    <?php $column1 = get_sub_field( 'colum1_media' );
                                    foreach ( $column1 as $ads ) {
                                        echo wp_get_attachment_image( $ads['id'], 'full' );
                                    } ?>
                                </div>
                            <?php endwhile; ?>
                            </div>
                            <div class="uk-width-2-3@s">
                            <?php while ( have_rows( 'column2' ) ) : the_row(); ?>
                                <header class="uk-flex uk-flex-middle uk-flex-center uk-text-center uk-background-primary uk-width-1-1 uk-height-small uk-light uk-margin-bottom">
                                    <h2><?php do_action( 'hdr', get_sub_field( 'colum2_headline' ) ); ?></h2>
                                </header>
                                <div class="uk-child-width-1-2@s uk-grid-small uk-grid-match" uk-grid uk-scrollspy="cls: uk-animation-slide-bottom-medium; delay: 900; repeat: true">
                                    <?php $column2 = get_sub_field( 'colum2_media' );
                                    foreach ( $column2 as $ads ) {
                                        echo wp_get_attachment_image( $ads['id'], 'full' );
                                    } ?>
                                </div>
                            <?php endwhile; ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <?php $oqBG = get_field( 'fp_quote-background' ); ?>
        <section id="online-quote" class="quote | uk-background-cover section" data-src="<?php echo ($oqBG) ? $oqBG['url']:''; ?>" uk-img>
            <div class="uk-container uk-container-small">
                <?php $shortcode = get_field( 'fp_oq-shortcode' );
                echo do_shortcode( $shortcode ); ?>
            </div>

            <?php if ( !wp_is_mobile() ) :
            if ( !is_page([ 302, 358, 650, 700 ]) ) : 
            $followers   = str_replace( ',', '', get_field( 'sm_followers', 'options' ) );
            $influencers = get_field( 'sm_influencers', 'options' );
            $impressions = str_replace( ',', '', get_field( 'sm_impressions', 'options' ) ); ?>
            <aside class="uk-background-muted uk-grid-collapse uk-grid-match uk-flex-middle uk-position-z-index | ticker" uk-grid uk-height-match="target: > div > .uk-card">
                <div>
                    <div class="uk-card uk-card-secondary | followers">
                        <div class="uk-card-body">
                            <div class="uk-card-title">Social Media Followers</div>
                            <span id="total-followers" class="total-followers2 | animate__animated" data-followers="<?=$followers?>"> <small>fetching data...</small> </span>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-secondary | influencers">
                        <div class="uk-card-body">
                            <div class="uk-card-title">Influencers</div>
                            <span id="total-influencers" class="total-influencers2" data-influencers="<?=$influencers?>"> <small>fetching data...</small> </span>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-secondary | impressions">
                        <div class="uk-card-body">
                            <div class="uk-card-title">30 Days' Impressions</div>
                            <span id="total-impressions" class="total-impressions2 | animate__animated" data-impressions="<?=$impressions?>"> <small>fetching data...</small> </span>
                        </div>
                    </div>
                </div>
            </aside>
            <?php endif;
            endif; // mobile
            // End widget stats ?>
        </section>

        <section id="micro-influencer" class="micro-influencer | section">
            <div class="uk-child-width-1-2@l uk-grid-match uk-flex-middle" uk-grid>
                <?php while ( have_rows( 'fp_influencer-media' ) ) : the_row();
                    $tiers = get_sub_field( 'tiers_graph' );
                    $clips = get_sub_field( 'marketing_video' );
                endwhile; ?>
                <div class="column-media | uk-flex uk-flex-middle uk-flex-center">
                    <div class="video-container" uk-scrollspy="cls: uk-animation-fade; delay: 600; repeat: true">
                        <video poster="https://sggmedia.com/wp-content/uploads/2023/09/screenshot.png" width="640" height="360" class="uk-position-relative uk-position-z-index" controls playsinline uk-video="autoplay: false">
                            <?php foreach ( $clips as $clip ) : ?>
                                <source src="<?php echo $clip['url']; ?>" type="<?php echo 'video/'.$clip['description']; ?>">
                            <?php endforeach; ?>
                        </video>
                    </div>
                </div>
                <div class="column-content | uk-flex-first@l">
                    <article class="uk-article">
                        <div uk-scrollspy="cls: uk-animation-slide-bottom-medium; delay: 300; repeat: true">
                            <?php the_field( 'fp_influencer-content' );
                            /* ?>
                            <h2 class="mi-headline">What is a Micro <br> <span class="uk-text-secondary">Influencer?</span></h2>
                            <p>Micro-Influencers are small accounts that have between 10,000 and 100,000 sports fan followers.</p>
                            <p>Micro-Influencers are social media content creators who focus on specific niches within regional and national markets.</p>
                            */ ?>
                        </div>

                        <picture uk-scrollspy="cls: uk-animation-slide-bottom-medium; delay: 600; repeat: true">
                            <?php echo wp_get_attachment_image( $tiers['id'], 'full', '', [ 'class' => 'uk-box-shadow-large' ] ); ?>
                        </picture>
                    </article>
                </div>
            </div>
        </section>

        <section id="live-drive" class="live-drive | section">
            <div class="uk-grid-collapse uk-grid-match uk-flex-middle" uk-grid>
                <div class="column-media | uk-width-1-2@l">
                    <picture uk-scrollspy="cls: uk-animation-slide-left-medium; delay: 300; repeat: true">
                        <?php $liveDriveBanner = get_field( 'fp_ld-banner' ); 
                        echo wp_get_attachment_image( $liveDriveBanner['id'], 'full' ); ?>
                    </picture>
                </div>
                <div class="column-content | uk-width-1-2@l uk-flex uk-flex-center">
                    <div class="uk-card" uk-scrollspy="cls: uk-animation-slide-right-medium; delay: 600; repeat: true">
                        <div class="uk-card-body">
                            <h2 class="ld-headline"><?php the_field( 'fp_ld-headline' ); ?></h2>
                            <a href="https://www.youtube.com/@livedrivestream" target="_blank"><img src="<?php echo _uri.'/resources/images/img-livedrive-url.png'; ?>" alt="YouTube"></a>
                            <p><?php the_field( 'fp_ld-content' ); ?></p>
                        </div>
                        <div class="uk-card-footer">
                            <h3 class="ld-subhead">Live Drive will be streamed on</h3>
                            <ul class="uk-subnav">
                                <?php $icons = get_field( 'fp_ld-handler' ); 
                                foreach ( $icons as $icon ) : ?>
                                <li><a href="<?php echo $icon['description']; ?>">
                                    <?php echo wp_get_attachment_image( $icon['id'], [ 44, 44, true ] ); ?>
                                </a></li>
                                <?php endforeach; ?>
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
                            <?php the_field( 'fp_franchise-content' ); ?>
                        </article>
                    </div>
                    <div class="column-media">
                        <picture uk-scrollspy="cls: uk-animation-scale-up; delay: 600; repeat: true">
                            <?php $theJoint = get_field( 'fp_franchise-media' );
                            echo wp_get_attachment_image( $theJoint['id'], 'full' ); ?>
                        </picture>
                    </div>
                </div>

            </div>
        </section>

        <section id="followers-chart" class="followers-chart | section">
            <div class="uk-grid-match uk-grid-collapse uk-flex-middle uk-flex-center" uk-grid>
                <div class="column-media | uk-width-1-2@m uk-flex uk-flex-center uk-flex-middle" uk-scrollspy="cls: uk-animation-slide-top; delay: 300; repeat: true">
                    <figure class="headings | uk-text-center uk-padding">
                        <img src="<?php echo _uri.'/resources/images/logo-sgg-media-black.png'; ?>" alt="SGG Media">
                        <h2 class="fc-headline">#3 IN SPORTS SOCIAL <br> Media Followers</h2>
                    </figure>
                </div>
                <div class="column-media-chart | uk-width-1-2@m uk-flex uk-flex-middle" uk-scrollspy="cls: uk-animation-slide-right-medium; delay: 600; repeat: true">
                    <picture class="uk-display-block">
                        <h2 class="uk-text-center">Social Media Influencers / Followers</h2>
                        <?php $table = get_field( 'fp_followers-media' );
                        echo wp_get_attachment_image( $table['id'], 'full' ); ?>
                    </picture>
                </div>
            </div>
        </section>

        <section id="graph" class="graph | section">
            <div class="uk-container uk-container-expand">

                <div class="graph-container">
                    <header class="uk-panel uk-text-center" uk-scrollspy="cls: uk-animation-scale-up; delay: 300; repeat: true">
                        <img src="<?php echo _uri.'/resources/images/logo-sgg-media-black.png'; ?>" class="uk-margin-small-bottom" alt="<?php bloginfo(); ?>">
                        <h2 class="graph-headline"><?php the_field( 'fp_graph-headline' ); ?></h2>
                        <?php the_field( 'fp_graph-content' ); 
                        /* ?>
                        <p class="uk-text-lead uk-heading-line"><span>online advertising quote in seconds</span></p>
                        <p class="uk-text-uppercase">Advertising Cost Per 1000 Impressions (CPM)</p>
                        */ ?>

                        <h3 class="graph-subhead"><?php the_field( 'fp_graph-subhead' ); ?></h3>
                    </header>

                    <figure class="chart-container" uk-scrollspy="cls: uk-animation-slide-bottom-medium; delay: 600; repeat: true">
                        <canvas id="SGGChart"></canvas>
                    </figure>
                </div>

            </div>
        </section>

        <section id="team" class="team | section">
            

            <div class="slide" data-anchor="slide1">
            
                <div class="uk-container">
                    <header class="uk-panel" uk-scrollspy="cls: uk-animation-fade-medium; delay: 300; repeat: true">
                        <?php the_field( 'fp_team-headline' ); ?>
                    </header>

                    <div class="executives | uk-child-width-auto@s uk-flex-center" uk-grid uk-scrollspy="target: > .column-content > .uk-card; cls: uk-animation-slide-bottom-medium; delay: 300; repeat: true">
                        <?php while ( have_rows( 'fp_executives' ) ) : the_row();
                        $avatar = get_sub_field( 'avatar' );
                        $fn     = explode(" ", $avatar['title']);
                        $fsn    = strtolower(substr($fn[0], 0, 1));
                        $lsn    = strtolower($fn[1]); ?>
                        <div class="column-content">
                            <div class="uk-card">
                                <div class="uk-card-media-top">
                                    <?php echo wp_get_attachment_image( $avatar['id'], [300, 300] ); ?>
                                </div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title"><?php echo $avatar['title']; ?></h3>
                                    <p><?php echo $avatar['caption']; ?></p>
                                    <p><a href="#managementTeam/<?=$fsn.$lsn?>" class="uk-text-meta">Read Bio</a></p>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    </div>
                </div>

                <div class="uk-container uk-container-small">
                    <div class="marketing | uk-child-width-auto@s uk-grid-small uk-grid-match uk-flex-center" uk-grid uk-height-match="target: > div > .uk-card > p" uk-scrollspy="target: > div > .uk-card; cls: uk-animation-slide-bottom-medium; delay: 300; repeat: true">
                        <?php while ( have_rows( 'fp_management' ) ) : the_row();
                        $fn = explode(" ", get_sub_field( 'name' )); ?>
                        <div class="-<?=strtolower($fn[1]);?>">
                            <div class="uk-card uk-card-body uk-card-small uk-text-center">
                                <h3 class="uk-card-title"><?php the_sub_field( 'name' ); ?></h3>
                                <p><?php the_sub_field( 'designation' ); ?></p>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    </div>
                </div>

            </div>
            <!-- Slide 1 -->

            <?php
            while ( have_rows( 'fp_executives' ) ) : the_row();
                $avatar = get_sub_field( 'avatar' );
                $fn     = explode(" ", $avatar['title']);
                $fsn    = strtolower(substr($fn[0], 0, 1));
                $lsn    = strtolower($fn[1]); ?>
                <div class="slide" data-anchor="<?=$fsn.$lsn?>">
                    <div class="uk-container">
                        <ul class="uk-subnav uk-subnav-pill uk-flex-right" uk-margin>
                            <li><a href="#managementTeam">Management Team</a></li>
                            <li><a href="#managementTeam/tpaul">Troy Paul</a></li>
                            <li><a href="#managementTeam/mpaul">Mark Paul</a></li>
                        </ul>

                        <article class="bio | uk-article uk-padding" uk-grid>

                            <figure class="uk-width-1-1 uk-width-auto@m">
                                <?php echo wp_get_attachment_image( $avatar['id'], [ 300, 300, true ] ); ?>
                                <h2><?php echo $avatar['title'] ?></h2>
                                <p><?php echo $avatar['caption'] ?></p>
                            </figure>
                            <figcaption class="uk-width-1-1 uk-width-expand@m">
                                <?php the_sub_field( 'content' ); ?>
                            </figcaption>
                        </article>
                    </div>
                </div>
            <?php endwhile; // End Rows
            
            ?>
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