<main id="main" class="main" role="main">
    <div class="uk-container uk-container-xlarge" id="Contents">
        <div class="uk-grid-small" uk-grid>

            <div class="uk-width-1-1@s uk-width-2-3@m">
            <!-- Start Content -->
                
                <div class="uk-card uk-card-default uk-card-body" data-card="contact">
                    <h3 class="uk-card-title"><?php the_title(); ?></h3>
                    
                    <?php echo do_shortcode( '[forminator_form id="110"]' ); ?>
                </div>
            
            <!-- End Content -->
            </div>

        </div>
    </div>
</main>