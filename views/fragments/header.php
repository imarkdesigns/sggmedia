<header class="hero" data-hero="home">
    <?php 
    $bgHdr = get_field( 'bg_header', 'option' ); 
    $bgContent = get_field( 'bg_content', 'option' ); ?>
    <div class="uk-width-1-1@s uk-width-2-3@m uk-light uk-background-cover uk-position-z-index | hero-container" data-src="<?php echo $bgHdr['url']; ?>" uk-img>
        <?php echo $bgContent; ?>
    </div>

    <div class="uk-overlay-primary uk-position-cover"></div>

</header>