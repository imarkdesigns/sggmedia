<main id="main" class="main uk-position-relative" role="main">

    <?php if ( have_rows( 'behind_group' ) ) : ?>
    <section id="about-us" class="uk-section | behind-sgg">
        <div class="uk-container uk-container-expand">
        <?php while ( have_rows( 'behind_group' ) ) : the_row(); 

        $imgWhoWeAre = get_sub_field( 'bg_whoweare_background' );
        $imgWhatWeDo = get_sub_field( 'bg_whatwedo_background' ); ?>

           <article class="uk-grid-match uk-flex-middle" uk-grid>
               <div class="uk-width-1-3@l">
                   <?php the_sub_field( 'bg_whoweare_content' ); ?>
               </div>
               <div class="uk-width-1-3@l">
                    <div class="uk-cover-container">
                        <?php if ( !empty( $imgWhoWeAre ) ) {
                            echo wp_get_attachment_image( $imgWhoWeAre['id'], 'full', '', [ 'uk-cover' => '' ] );
                            // echo '<img src="'._uri.'/resources/images/istockphoto-1129607870-1024x1024.jpg" alt="" uk-cover>';
                        } else {
                            echo '<img src="'._uri.'/resources/images/istockphoto-1132295638-1024x1024.jpg" alt="" uk-cover>';
                        } ?>
                    </div>
               </div>
               <div class="uk-width-1-3@l">
                   <?php the_sub_field( 'bg_whatwedo_content' ); ?>
               </div>
           </article>

        <?php endwhile; ?>
        </div>
    </section>
    <?php endif; ?>

    <?php if ( have_rows( 'introduction_group' ) ) : ?>
    <section class="uk-section uk-section-muted | introduction">
        <div class="uk-container">
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