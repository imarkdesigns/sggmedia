<header class="hero" data-hero="home">
    <?php 
    $bgHdr = get_field( 'bg_header', 'options' ); 
    $bgContent = get_field( 'bg_content', 'options' ); ?>
    <div class="uk-width-1-1@s uk-width-2-3@m uk-light uk-position-z-index | hero-container" data-src="<?php echo $bgHdr['url']; ?>" uk-img>
        <?php $bgContent; ?>
    </div>

    <div class="uk-overlay-primary uk-position-cover"></div>

</header>