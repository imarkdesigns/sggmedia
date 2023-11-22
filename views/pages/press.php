<main id="main" class="main m-scene" role="main">
    
    <section class="press-coverage | uk-section uk-section-muted">
        <div class="uk-container">
            <h2 id="seen-in-press" class="uk-text-center"><?php the_field( 'slider_heading' ); ?></h2>
            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="autoplay: true; autoplay-interval: 1500; pause-on-hover: false;">
                <ul class="uk-slider-items uk-child-width-1-3@s uk-child-width-1-4@m uk-grid uk-grid-small">
                    <?php $pressImgs = get_field('seen_in_press');
                    foreach ( $pressImgs as $pressImg ) : ?>
                    <li>
                        <figure class="uk-panel">
                            <a uk-scroll="offset: 90" href="#Contents">
                                <?php echo wp_get_attachment_image( $pressImg['id'], 'full' ); ?>
                            </a>
                        </figure>
                    </li>
                    <?php endforeach; ?>
                </ul>

                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
            </div>
        </div>
    </section>

    <section class="sbc-awards | uk-section uk-section-secondary">
        <div class="uk-container uk-container-expand uk-text-center">
            
            <h2>SGG Media – The Only Sports Social Media Co. Nominated for National Advertising Awards</h2>
            <div class="uk-grid-large uk-grid-divider" uk-grid>
                <div class="uk-width-1-2@l">
                    <div class="uk-display-block uk-text-center uk-width-expand uk-margin-bottom">
                        <img src="<?php echo _uri.'/resources/images/north-america-awards-logo.png'; ?>" width="270" alt="SBC Awards 2023">
                    </div>                    
                    <h3>SGG Media Voted Finalists for "Sports Media Company of the Year" - 2023 SBC Global Awards</h3>
                </div>
                <div class="uk-width-1-2@l">
                    <div class="uk-display-block uk-text-center uk-width-expand uk-margin-bottom">
                        <img src="<?php echo _uri.'/resources/images/EGR-B2B-Awards-2023_WinnerLogos_Shortlisted_l.png'; ?>" width="480" alt="EGR B2B Awards 2023">
                    </div>                    
                    <h3>SGG Media - Acquisition Partner of the Year Finalist</h3>
                </div>
            </div>
            
        </div>
    </section>

    <section id="Contents" class="uk-section | press-release">
        <div class="uk-container">
        <?php $press = [ 'post_type' => 'sgg-press', 'posts_per_page' => -1, 'orderby' => 'menu_order', 'order' => 'ASC' ];
            query_posts( $press );
            ?>
            <div uk-grid class="uk-grid-match uk-child-width-1-2@s uk-child-width-1-3@m uk-flex-center" uk-height-match="target: > div > .uk-card > .uk-card-body" uk-scrollspy="target: > div; cls: uk-animation-slide-bottom-medium; delay: 300">
                <?php while ( have_posts() ) : the_post(); ?>
                <div>
                    <div class="uk-card uk-card-default uk-card-hover uk-card-small uk-text-center">
                        <div class="uk-card-media-top">
                            <a href="<?php the_field( 'external_link' ) ?>" target="_blank">
                            <?php if ( has_post_thumbnail() ) {
                                $featuredID = get_post_thumbnail_id();
                                echo wp_get_attachment_image( $featuredID, 'full' );
                            } ?>
                            </a>
                        </div>
                        <div class="uk-card-body">
                            <div class="uk-card-title"><?php the_title(); ?></div>
                        </div>
                        <div class="uk-card-footer">
                            <a href="<?php the_field( 'external_link' ) ?>" target="_blank">Click here to Read</a>
                        </div>
                    </div>
                </div>
                <?php endwhile; wp_reset_query(); ?>
            </div>

        </div>
    </section>

    <?php include( locate_template( _frg.'colophon.php', false, true ) ); ?>

</main>