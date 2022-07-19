<?php 
$bgHdr = get_field( 'bg_header', 'option' ); 
$bgContent = get_field( 'bg_content', 'option' ); ?>
<header class="hero" data-hero="home" data-src="<?php echo $bgHdr['url']; ?>" uk-img>

    <div class="uk-width-1-1@s uk-width-2-3@m uk-light uk-position-z-index | hero-container">
        <?php echo $bgContent; ?>
    </div>

    <div class="uk-overlay-primary uk-position-cover"></div>

</header>