<main id="main" class="main" role="main">
    
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