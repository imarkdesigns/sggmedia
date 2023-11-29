<main id="main" class="main" role="main">

    <section id="Contents" class="source--video-list | uk-section uk-section-muted">
        <div class="uk-container">

            <div class="uk-headings | uk-flex-middle uk-margin-large-bottom" uk-grid>
                <?php while ( have_rows( 'video_section' ) ) : the_row(); ?>
                <div class="uk-width-expand@m">
                    <h2>Media Interviews</h2>
                    <p><strong>Social Media Success is Half Science and Half Art</strong></p>
                    <p>During this year’s edition of SBC Summit North America, the team had the chance to sit down and talk about the latest trends in sports marketing with some of the biggest players in the space. </p>
                </div>
                <div class="uk-width-auto@m">
                    <?php // do_action( 'intVideo' ); ?>
                    <div uk-lightbox>
                        <figure class="video-item | uk-inline">
                            <img src="https://img.youtube.com/vi/uEyykxqAPMY/0.jpg" alt="">
                            <a href="https://www.youtube-nocookie.com/watch?v=uEyykxqAPMY&rel=0&start=23s" class="uk-position-cover" aria-label="Watch the Video" title="Watch Video" data-attrs="width: 1280; height: 720;"></a>
                        </figure>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>

    <section id="LDS" class="source--video-list | uk-section">
        <div class="uk-container">

            <div class="uk-headings | uk-flex-middle uk-margin-large-bottom" uk-grid>
                <?php while ( have_rows( 'livedrive_section' ) ) : the_row(); ?>
                <div class="uk-width-auto@m">
                    <img src="<?php echo _uri.'/resources/images/podcast/livedrive.jpg' ?>" class="uk-border-rounded uk-box-shadow-small" alt="Live Drive Stream">
                </div>
                <div class="uk-width-expand@m">
                    <h2><?php the_sub_field( 'livedrive_section_title' ); ?></h2>
                    <p><?php the_sub_field( 'livedrive_section_description' ); ?></p>
                </div>
                <?php endwhile; ?>
            </div>

            <div class="uk-grid-small uk-child-width-1-2@s uk-child-width-1-3@m" uk-grid>
                <?php do_action( 'liveDrive' ); ?>
            </div>

            <div class="uk-text-center uk-margin-large-top" hidden>
                <a href="#" class="uk-button uk-button-primary uk-button-large">View All</a>
            </div>
    
        </div>
    </section>

    <section id="SSP" class="source--video-list | uk-section">
        <div class="uk-container">

            <div class="uk-headings | uk-flex-middle uk-margin-large-bottom" uk-grid>
                <?php while ( have_rows( 'video_section' ) ) : the_row(); ?>
                <div class="uk-width-auto@m">
                    <img src="<?php echo _uri.'/resources/images/podcast/ss-logo2.jpg' ?>" class="uk-border-rounded uk-box-shadow-small" alt="Splash Sisters">
                </div>
                <div class="uk-width-expand@m">
                    <h2><?php the_sub_field( 'video_section_title' ); ?></h2>
                    <p><?php the_sub_field( 'video_section_description' ); ?></p>
                </div>
                <?php endwhile; ?>
            </div>

            <div class="uk-grid-small uk-child-width-1-2@s uk-child-width-1-3@m" uk-grid>
                <?php do_action( 'podVideo' ); ?>
            </div>

            <div class="uk-text-center uk-margin-large-top" hidden>
                <a href="#" class="uk-button uk-button-primary uk-button-large">View All</a>
            </div>
    
        </div>
    </section>



    <?php /* Temporary Disabled
    <section class="source--podcast-list | uk-section uk-section-secondary">
        <div class="uk-container">

            <div class="uk-headings | uk-child-width-1-2@m uk-margin-large-bottom" uk-grid>
                <?php while ( have_rows( 'podcast_section' ) ) : the_row();
                <div>
                    <h2><?php the_sub_field( 'podcast_section_title' );</h2>
                </div>
                <div>
                    <p><?php the_sub_field( 'podcast_section_description' );</p>
                </div>
                <?php endwhile;
            </div>

            <div class="uk-grid-small uk-grid-divider uk-child-width-1-1 uk-child-width-1-2@s" uk-grid>
                <?php for ( $n = 1; $n < 7; $n++ ) :
                <div>
                    <figure class="uk-card uk-card-small">
                        <div class="uk-card-header">
                            <div class="uk-grid-small uk-flex-top" uk-grid>
                                <div class="uk-width-auto">
                                    <img class="uk-border-rounded" width="80" height="80" src="https://img.youtube.com/vi/_2iIbxbLfdA/3.jpg" alt="Avatar">
                                </div>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom">Podcast Title #<?=$n; </h3>
                                    <p class="uk-text-small">Corporis obcaecati labore esse adipisci omnis, maiores, expedita facere cum impedit velit, ut, magni quo soluta est?</p>
                                    <p class="uk-text-meta uk-margin-remove-top">
                                        <time datetime="2016-04-01T19:00">March 01</time> <span class="uk-margin-small-left uk-margin-small-right">|</span> <a href="#" target="_blank" aria-label="Listen to Podcast" title="Listen to Podcast"> <i uk-icon="play-circle"></i> </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </figure>
                </div>
                <?php endfor;
            </div>

            <div class="uk-text-center uk-margin-large-top">
                <a href="#" class="uk-button uk-button-primary uk-button-large">View All</a>
            </div>
    
        </div>
    </section>
    */ ?>

    <?php include( locate_template( _frg.'colophon.php', false, true ) ); ?>

</main>