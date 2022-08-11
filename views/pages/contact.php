<main id="main" class="main" role="main">

    <section id="Contents" class="uk-section | contact">
        <div class="uk-container">

            <div class="uk-headings">
                <h2>Contact SGG Media by completing the form Below</h2>
            </div>

            <div class="uk-grid-divider" uk-grid>
                <div class="uk-width-1-2@m">
                    <?php echo do_shortcode( get_field( 'forminator_code' ) ); ?>
                </div>
                <div class="uk-width-1-2@m uk-flex-first uk-text-center | contact-info">
                    <?php the_field( 'contact_info_content' ); ?>
                </div>

            </div>

        </div>
    </section>

</main>