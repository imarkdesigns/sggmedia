<?php if ( !is_404() ) : ?>

    <?php if ( !is_page([ 302, 358, 650, 700 ]) ) : 
    $followers   = str_replace( ',', '', get_field( 'sm_followers', 'options' ) );
    $influencers = get_field( 'sm_influencers', 'options' );
    $impressions = str_replace( ',', '', get_field( 'sm_impressions', 'options' ) ); ?>
    <aside class="uk-background-muted uk-grid-collapse uk-grid-match uk-flex-middle | ticker" uk-grid uk-height-match="target: > div > .uk-card" uk-sticky="start: 800; offset: 60; animation: uk-animation-slide-top">
        <div>
            <div class="uk-card uk-card-secondary | followers">
                <div class="uk-card-body">
                    <div class="uk-card-title">Social Media Followers</div>
                    <span id="total-followers" class="animate__animated" data-followers="<?=$followers?>"> <small>fetching data...</small> </span>
                </div>
            </div>
        </div>
        <div>
            <div class="uk-card uk-card-secondary | influencers">
                <div class="uk-card-body">
                    <div class="uk-card-title">Influencers</div>
                    <span id="total-influencers" data-influencers="<?=$influencers?>"> <small>fetching data...</small> </span>
                </div>
            </div>
        </div>
        <div>
            <div class="uk-card uk-card-secondary | impressions">
                <div class="uk-card-body">
                    <div class="uk-card-title">30 Days' Impressions</div>
                    <span id="total-impressions" class="animate__animated" data-impressions="<?=$impressions?>"> <small>fetching data...</small> </span>
                </div>
            </div>
        </div>
    </aside>
    <?php endif;
    // End widget stats

    // main header
    if ( is_front_page() ) : 
    $hdr_bg = get_field( 'bg_header', 'options' );
    $hdr_content = get_field( 'bg_content', 'options' );

    ?>
    <header class="hero" data-hero="home" data-src="<?php echo $hdr_bg['sizes']['2048x2048']; ?>" uk-img>
        <div class="uk-width-1-1@s uk-width-1-2@m uk-light | hero-container" uk-scrollspy="cls: uk-animation-slide-bottom-medium; delay: 300">
            <?php echo $hdr_content; ?>
        </div>
        <div class="uk-overlay-primary uk-position-cover"></div>
    </header>
    <?php else : 
        if ( !is_page([ 650, 700, 879, 977 ]) ) :
        $hdr_contents = get_field( 'hdr_content' ); 


        ?>
        <header class="hero <?php echo ( !is_page([ 108 ]) ? 'uk-background-cover' : 'uk-background-contain' ); ?>" data-hero="page" data-src="<?php echo $hdr_contents['hdr_bg']['url']; ?>" uk-img>
            <div class="uk-overlay-primary uk-position-cover"></div>
            <div class="uk-overlay uk-position-center" uk-scrollspy="target: > h1; cls: uk-animation-fade; delay: 300">
                <h1> <small><?php echo $hdr_contents['text_info']; ?></small> <?php echo $hdr_contents['text_title']; ?></h1>
            </div>  
        </header>
        <?php endif;
    endif;
    // End main header

endif; 

if ( !is_page([ 879 ]) ) : ?>

<div id="quote-ads" class="uk-position-fixed uk-position-bottom-right uk-position-z-index" uk-alert uk-scrollspy="cls: uk-animation-slide-right; delay: 300">
    <button class="uk-alert-close" title="Close this window" uk-close></button>
    <div class="uk-card uk-margin-remove">
        <div class="uk-card-media-top">
            <img src="<?php echo _uri.'/resources/images/banner-quote.png' ?>" alt="Get An Advertising Quote In Seconds">
        </div>
    </div>
    <div class="uk-overlay uk-position-bottom-center uk-text-center uk-padding-remove">
        <h2>Get An Advertising <span class="uk-light">Quote In Seconds</span></h2>
        <a href="<?php echo get_permalink( 2 ).'#online-quote'; ?>" data-menuanchor="online-quote" class="uk-button uk-button-small uk-button-primary uk-margin-top">Click Here</a>
    </div>
</div>

<?php 
    /*
    elseif ( is_page([ 58 ]) ) : ?>

    <div id="quote-ads" class="uk-position-fixed uk-position-bottom-right uk-position-z-index" uk-alert uk-scrollspy="cls: uk-animation-slide-right; delay: 300">
        <div class="uk-card uk-card-secondary">
            <button class="uk-alert-close" title="Close this window" uk-close></button>
            <h2>Get An Advertising <span class="uk-light">Quote In Seconds</span></h2>
            <a href="<?php echo get_permalink( 879 ); ?>" class="uk-button uk-button-small uk-button-primary uk-margin-top">Click Here</a>
        </div>
    </div>

<?php */
endif;