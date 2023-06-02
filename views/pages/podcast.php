<main id="main" class="main" role="main">

    <section id="Contents" class="source--video-list | uk-section">
        <div class="uk-container">

            <div class="uk-headings | uk-child-width-1-2@m uk-margin-large-bottom" uk-grid>
                <?php while ( have_rows( 'video_section' ) ) : the_row(); ?>
                <div>
                    <h2><?php the_sub_field( 'video_section_title' ); ?></h2>
                </div>
                <div>
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

</main>