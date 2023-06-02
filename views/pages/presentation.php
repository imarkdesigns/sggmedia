<main id="main" class="main" role="main">
    
    <section id="Contents" class="presentation-point | uk-section">
        <div class="uk-container">
            
            <div uk-slider>
                <div class="uk-position-relative">
                
                    <div class="uk-slider-container">
                        <ul class="uk-slider-items uk-child-width-1-1">
                            <?php $images = get_field( 'powerpoint_presentation' ); 
                            foreach ( $images as $image ) : ?>
                            <li>
                                <?php echo wp_get_attachment_image( $image['id'], 'full' ); ?>
                            </li>
                            <?php endforeach; ?>
                        </ul>

                        <div class="uk-visible@m uk-light">
                            <a class="uk-position-center-left uk-position-small slider-nav" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                            <a class="uk-position-center-right uk-position-small slider-nav" href="#" uk-slidenav-next uk-slider-item="next"></a>
                        </div>

                    </div>
                    
                    <ul class="uk-slider-nav uk-dotnav uk-margin-top"></ul>
                
                </div>            	
            </div>
            
        </div>
    </section>
    
</main>