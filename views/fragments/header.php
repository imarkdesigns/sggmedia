<?php if ( !is_page( 302 ) ) : 

$followers   = str_replace( ',', '', get_field( 'sm_followers', 'options' ) );
$influencers = get_field( 'sm_influencers', 'options' );
$impressions = str_replace( ',', '', get_field( 'sm_impressions', 'options' ) );

?>
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
<?php 
endif;

if ( is_front_page() ) : 
$hdr_bg = get_field( 'bg_header', 'options' );
$hdr_content = get_field( 'bg_content', 'options' );

?>
<header class="hero" data-hero="home" data-src="<?php echo $hdr_bg['sizes']['2048x2048']; ?>" uk-img>
    <div class="uk-width-1-1@s uk-width-2-3@m uk-light uk-position-z-index | hero-container" uk-scrollspy="cls: uk-animation-slide-bottom-medium; delay: 300">
        <?php echo $hdr_content; ?>
    </div>
    <div class="uk-overlay-primary uk-position-cover"></div>
</header>

<?php else : 

$hdr_contents = get_field( 'hdr_content' ); ?>
<header class="hero" data-hero="page" data-src="<?php echo $hdr_contents['hdr_bg']['url']; ?>" uk-img>
    <div class="uk-overlay-primary uk-position-cover"></div>
    <div class="uk-overlay uk-position-center" uk-scrollspy="target: > h1; cls: uk-animation-fade; delay: 300">
        <h1> <small><?php echo $hdr_contents['text_info']; ?></small> <?php echo $hdr_contents['text_title']; ?></h1>
    </div>  
</header>

<?php endif; ?>