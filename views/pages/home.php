<main id="main" class="main uk-position-relative" role="main">

    <?php if ( have_rows( 'behind_group' ) ) : ?>
    <section id="about-us" class="uk-section | behind-sgg">
        <div class="uk-container uk-container-large">
            <div class="uk-position-relative uk-visible-toggle" tabindex="-1" uk-slider="autoplay: true; finite: false">
                <ul class="uk-slider-items uk-grid-collapse uk-flex-middle uk-grid">
                    <?php while ( have_rows( 'behind_group' ) ) : the_row(); 

                    $imgWhoWeAre = get_sub_field( 'bg_whoweare_background' );
                    $imgWhatWeDo = get_sub_field( 'bg_whatwedo_background' ); ?>
                    <li>
                        <figure class="uk-grid-match uk-grid-collapse uk-flex-middle" uk-grid>
                            <figcaption class="uk-width-1-3@m" uk-slider-parallax="x: 100,-100">
                                <?php the_sub_field( 'bg_whoweare_content' ); ?>
                            </figcaption>
                            <div class="media | uk-width-2-3@m">
                            <?php if ( !empty( $imgWhoWeAre ) ) {
                                echo wp_get_attachment_image( $imgWhoWeAre['id'], 'full' );
                            } else {
                                echo '<img src="'._uri.'/resources/images/sggmedia-marketing-ads.gif" width="1280" height="720" alt="Marketing Ads">';
                            } ?>
                            </div>                           
                        </figure>
                    </li>
                    <li>
                        <figure class="uk-child-width-1-2@m uk-grid-large uk-flex-middle" uk-grid>
                            <figcaption uk-slider-parallax="x: 100,-100">
                                <?php the_sub_field( 'bg_whatwedo_content' ); ?>
                            </figcaption>
                            <?php if ( !empty($imgWhatWeDo) ) {
                                echo wp_get_attachment_image( $imgWhatWeDo['id'], 'full' );
                            } ?>
                        </figure>
                    </li>
                    <?php endwhile; ?>
                </ul>
                <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <?php if ( have_rows( 'introduction_group' ) ) : ?>
    <section class="uk-section uk-section-muted | introduction">
        <div class="uk-container">
            <div class="uk-headings">
                <h2>U.S. SPORTS BETTING OPERATORS SPENT <br> $300,000,000 ON ADVERTISING PAST 12- MONTHS</h2>
            </div>
            <div class="uk-grid-match" uk-grid>
            <?php while ( have_rows( 'introduction_group' ) ): the_row(); ?>
                <div class="uk-width-1-2@m">
                    <div class="uk-card uk-card-small">
                        <div class="uk-card-body">
                            <div class="uk-card-title">What's Now</div>
                            <?php the_sub_field( 'ig_whatsnow' ); ?>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-2@m">
                    <div class="uk-card uk-card-small">
                        <div class="uk-card-body">
                            <div class="uk-card-title">What's Next</div>
                            <?php the_sub_field( 'ig_whatsnext' ); ?>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-1">
                    <div class="uk-card uk-card-small">
                        <div class="uk-card-body">
                            <div class="uk-card-title">What's Possible</div>
                            <?php the_sub_field( 'ig_whatspossible' ); ?>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <section class="uk-section | partners ">
        <div class="uk-container">
            
            <h2><?php the_field( 'partners_title' ); ?></h2>
            <div id="partners" class="grid-wrapper">
            <?php while ( have_rows( 'partners_group' ) ) : the_row();
                $imgPartners = get_sub_field( 'pg_photo' );
                $imgModals   = get_sub_field( 'pg_samples' );
                ?>
                <figure class="uk-card uk-card-secondary">
                <?php
                    if ( !empty($imgModals) ) : ?>
                    <div class="uk-card-badge uk-label uk-link-reset">
                        <button type="button" title="View Example Advertising Examples" uk-toggle="target: #ads-<?php echo $imgPartners['id']; ?>">View Ad Sample</button>
                    </div>
                    <?php endif; ?>
                    <div class="uk-card-media-top">
                        <?php if ( !empty( $imgPartners ) ) {
                            echo wp_get_attachment_image( $imgPartners['id'], 'full' );
                        } ?>
                    </div>
                </figure>

                <?php if ( !empty($imgModals) ) : ?>
                <div id="ads-<?php echo $imgPartners['id']; ?>" class="uk-flex-top uk-modal-container | sample-ads" uk-modal>
                    <div class="uk-modal-dialog uk-margin-auto-vertical uk-text-center">
                        <button class="uk-modal-close-default" type="button" uk-close aria-label="Close Modal"></button>
                        <h2> <?php echo $imgPartners['title']; ?> <small>Advertising Example</small> </h2>
                        <div class="uk-child-width-1-2@m uk-grid-small uk-flex-top" uk-grid>
                            <?php foreach ( $imgModals as $modal ) : ?>
                            <div>
                                <figure>
                                    <?php echo wp_get_attachment_image( $modal['id'], 'full' ); ?>
                                </figure>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <?php
                endif; // End Modal

            endwhile; // End Loop ?>
            </div>

        </div>
    </section>

    <?php include( locate_template( _frg.'colophon.php', false, true ) ); ?>

</main>