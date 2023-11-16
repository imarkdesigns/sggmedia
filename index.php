<?php get_header();

    global $post;
    switch ( $post->ID ) {

        // Pages
        // case '259':   $pageName = 'cost-effectiveness'; break;
        // case '261':   $pageName = 'how-it-works'; break;
        // case '295':   $pageName = 'revenue-streams'; break;
        case '3':     $pageName = 'legal'; break;
        case '58':    $pageName = 'press'; break;
        case '108':   $pageName = 'contact'; break;
        case '124':   $pageName = 'team'; break;
        case '302':   $pageName = 'challenge'; break;
        case '358':   $pageName = 'sggmi-agreement'; break;
        case '362':   $pageName = 'careers'; break;
        case '469':   $pageName = 'podcast'; break;
        case '650':   $pageName = 'presentation'; break;
        case '700':   $pageName = 'sbc-interview'; break;
        case '879':   $pageName = 'request-quote'; break;
        case '977':   $pageName = 'cloud-campaign'; break;

        default:
            $pageName = 'home';
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