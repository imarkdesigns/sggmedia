<section class="uk-section uk-padding-remove-vertical | colophon">
<?php // Colophon Settings
    $ci_content = get_field( 'contact_info_content', 'options' );
    $ci_bgPhoto = get_field( 'contact_info_bg', 'options' );
    ?>
    <div class="uk-container uk-container-expand uk-padding-remove | contact-info" data-src="<?php echo $ci_bgPhoto['url']; ?>" uk-img>
        <article class="uk-article uk-width-xlarge uk-padding-large uk-light">
            <?php echo $ci_content; ?>
        </article>
    </div>

    <div class="uk-container uk-container-expand uk-position-relative uk-height-medium | contact-info-link">
        <div class="uk-overlay uk-position-center uk-text-center">
            <h2>Interested In Partnering?</h2>
            <a href="<?php echo get_permalink( 108 ); ?>" class="uk-button uk-button-primary uk-button-large">Contact Us</a>
        </div>
    </div>

</section>