<main id="main" class="main" role="main">

    <section id="Contents" class="uk-section | careers">
        <div class="uk-container uk-container-small">

            <div class="uk-headings">
                <h2><?php the_title(); ?></h2>
            </div>

            <ul uk-accordion="collapsible: false; offset: 160">
                <?php while ( have_rows( 'career_opportunities' ) ) : the_row(); ?>
                <li>
                    <a class="uk-accordion-title" href="#"><?php the_sub_field( 'job_title' ); ?></a>
                    <div class="uk-accordion-content">
                        <?php the_sub_field( 'job_description' ); ?>
                    </div>
                </li>
                <?php endwhile; ?>
            </ul>

        </div>
    </section>

</main>