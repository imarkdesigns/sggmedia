<?php get_header();

    global $post;
    switch ( $post->ID ) {

        // Pages
        case '124':   $pageName = 'team'; break;
        case '58':    $pageName = 'press'; break;
        case '108':   $pageName = 'contact'; break;
        case '259':   $pageName = 'advertising-chart'; break;
        case '261':   $pageName = 'advertiser'; break;
        case '3':     $pageName = 'legal'; break;

        default:
            $pageName = 'advertise';
            break;

    }

    if ( post_password_required() ) : ?>
        <main class="main" role="main">
            <section class="uk-section uk-section-muted">
                <div class="uk-container uk-container-small uk-height-meidum uk-flex uk-flex-middle uk-flex-center uk-text-center">
                    
                    <article>
                        <span uk-icon="icon: lock; ratio: 5"></span>
                        <hr class="uk-divider-small uk-margin-auto">
                        <?php the_content(); ?>
                    </article>

                </div>
            </section>
        </main>
    <?php else :
        get_template_part( _page.$pageName );
    endif;
    
get_footer();