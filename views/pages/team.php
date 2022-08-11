<main id="main" class="main uk-position-relative" role="main">

    <section id="Contents" class="uk-section | executive-team">
        <div class="uk-container">

            <div class="uk-headings">
                <small>Our Professional</small>
                <h2>Management Team</h2>
                <p>A Division of Sports Gambling Guides, Inc.</p>
            </div>

            <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-flex-center" uk-grid uk-scrollspy="target: > div; cls: uk-animation-slide-bottom-medium; delay: 300">
            <?php while ( have_rows( 'management_team' ) ) : the_row(); 
                $fullName = explode(" ", get_sub_field( 'profile_full_name' ));
                $fName    = strtolower(substr($fullName[0], 0, 1));
                $lName    = strtolower($fullName[1]); ?>
                <div>
                    <div class="uk-card uk-card-primary uk-text-center">
                        <div class="uk-card-media-top">
                            <a href="#<?=$fName.$lName?>" uk-toggle>
                                <?php $avatar = get_sub_field( 'profile_photo' );
                                echo wp_get_attachment_image( $avatar['id'], [ 300, 300, true ] ); ?>
                            </a>
                        </div>
                        <div class="uk-card-body">
                            <h3><?php the_sub_field( 'profile_full_name' ); ?></h3>
                            <p><?php the_sub_field( 'profile_designation' ); ?></p>
                        </div>
                        <div class="uk-card-footer">
                            <button type="button" uk-toggle="target: #<?=$fName.$lName?>">Read Bio</button>
                        </div>
                    </div>

                    <?php // Modal for BIO ?>
                    <div id="<?=$fName.$lName?>" class="uk-flex-top | biography" uk-modal>
                        <div class="uk-modal-dialog uk-margin-auto-vertical">
                            <button class="uk-modal-close-default" type="button" uk-close aria-label="Close Modal"></button>

                            <div uk-grid>
                                <div class="uk-width-1-3@m">
                                    <figure>
                                        <?php $avatar = get_sub_field( 'profile_photo' );
                                        echo wp_get_attachment_image( $avatar['id'], [ 300, 300, true ] ); ?>
                                    </figure>
                                </div>
                                <div class="uk-width-2-3@m">
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
    </section>

    <section class="uk-section uk-padding-remove-top | marketing-team">
        <div class="uk-container">

            <div class="uk-headings">
                <small>SGG Media</small>
                <h2>Social Media Team</h2>
            </div>

            <div class="uk-flex-center" uk-grid uk-scrollspy="target: > div; cls: uk-animation-slide-bottom-medium; delay: 300">
            <?php while ( have_rows( 'sc_team' ) ) : the_row();
                if ( get_row_index() < 3 ) {
                    $class = 'class="uk-width-1-2@m"';
                } else {
                    $class = 'class="uk-width-1-3@m"';
                } ?>
                <div <?=$class?>>
                    <div class="uk-card uk-text-center">
                        <div class="uk-card-body">
                            <h3><?php the_sub_field( 'profile_full_name' ); ?></h3>
                            <p><?php the_sub_field( 'profile_designation' ); ?></p>
                        </div>
                    </div>                    
                </div>
                <?php
            endwhile; ?>
            </div>

            <div class="uk-flex-center" uk-grid uk-scrollspy="target: > div; cls: uk-animation-slide-bottom-medium; delay: 300">
                <?php while ( have_rows( 'pm_team' ) ) : the_row(); ?>
                <div class="uk-width-1-2@m">
                    <div class="uk-card uk-text-center">
                        <div class="uk-card-body">
                            <h3><?php the_sub_field( 'profile_full_name' ); ?></h3>
                            <p><?php the_sub_field( 'profile_designation' ); ?></p>
                        </div>
                    </div>                    
                </div>
                <?php endwhile; ?>
            </div>

            <div class="uk-headings uk-margin-large-top">
                <h3>Partnership Associates</h3>
            </div>

            <div class="uk-flex-center" uk-grid uk-scrollspy="target: > div; cls: uk-animation-slide-bottom-medium; delay: 300">
                <?php while ( have_rows( 'pa_team' ) ) : the_row(); ?>
                <div class="uk-width-1-4@m">
                    <div class="uk-card uk-text-center">
                        <div class="uk-card-body">
                            <h3><?php the_sub_field( 'profile_full_name' ); ?></h3>
                            <p><?php the_sub_field( 'profile_designation' ); ?></p>
                        </div>
                    </div>                    
                </div>
                <?php endwhile; ?>
            </div>

            <div class="uk-flex-center" uk-grid uk-scrollspy="target: > div; cls: uk-animation-slide-bottom-medium; delay: 300">
                <?php while ( have_rows( 'graphic_team' ) ) : the_row(); ?>
                <div class="uk-width-1-2@m">
                    <div class="uk-card uk-text-center">
                        <div class="uk-card-body">
                            <h3><?php the_sub_field( 'profile_full_name' ); ?></h3>
                            <p><?php the_sub_field( 'profile_designation' ); ?></p>
                        </div>
                    </div>                    
                </div>
                <?php endwhile; ?>
            </div>

        </div>
    </section>

    <section class="uk-section uk-padding-remove-vertical | colophon">
        
        <div class="uk-container uk-container-expand uk-position-relative uk-height-medium | contact-info-link">
            <div class="uk-overlay uk-position-center uk-text-center">
                <h2>Interested In Partnering?</h2>
                <a href="<?php echo esc_url( get_permalink( 108 ) ); ?>" class="uk-button uk-button-primary uk-button-large">Contact Us</a>
            </div>
        </div>

    </section>

</main>