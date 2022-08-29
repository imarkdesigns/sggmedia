<main id="main" class="main uk-position-relative" role="main">
    <section id="Contents" class="sggmi-agreement | uk-section">
        <div class="uk-container uk-container-small">

            <div class="uk-headings">
                <h2></h2>
            </div>

            <div class="uk-panel">
                <?php 

                $_GET['download'] = do_shortcode( '[e2pdf-download id="1"]' );

                echo do_shortcode( '[forminator_form id="361"]' ); ?>

            </div>

        </div>
    </section>
</main>