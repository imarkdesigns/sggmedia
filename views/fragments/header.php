<?php 
$bgHdr = get_field( 'bg_header', 'option' ); 
$bgContent = get_field( 'bg_content', 'option' ); 


if ( is_front_page() ) : ?>

<aside class="uk-margin-remove uk-text-center | tagline" uk-alert> <span class="uk-h3">SGG Media - A Division of Sports Gambling Guides, Inc.</span> </aside>
<header class="hero" data-hero="home" data-src="<?php echo $bgHdr['url']; ?>" uk-img>
    <div class="uk-width-1-1@s uk-width-2-3@m uk-light uk-position-z-index | hero-container" uk-scrollspy="cls: uk-animation-slide-bottom-medium; delay: 300">
        <?php echo $bgContent; ?>
    </div>
    <div class="uk-overlay-primary uk-position-cover"></div>
</header>

<?php else : 

switch ( $post->ID ) {

    case '124':
        $hdrImg = _uri.'/resources/images/sggmedia-header-team.jpg';
        $hdrTitle = '<small>Our Team</small> SGG Media Executive Team';
        break;
    
    case '58':
        $hdrImg = _uri.'/resources/images/sggmedia-header-press.jpg';
        $hdrTitle = '<small>SGG Media</small> Press Releases';
        break;

    case '108':
        $hdrImg = _uri.'/resources/images/sggmedia-header-contact.jpg';
        $hdrTitle = '<small>Interested?</small> Let\'s Connect';
        break;
} ?>

<header class="hero" data-hero="page" data-src="<?php echo $hdrImg; ?>" uk-img>
    <div class="uk-overlay-primary uk-position-cover"></div>
    <div class="uk-overlay uk-position-center uk-light" uk-scrollspy="target: > h1; cls: uk-animation-fade; delay: 300">
        <h1> <?php echo $hdrTitle; ?> </h1>
    </div>
</header>

<?php endif; ?>
<aside class="uk-background-muted | ticker">
    <div>
        <div class="uk-card uk-card-secondary">
            <div class="uk-card-body">
                <div class="uk-card-title">Social Media Followers</div>
                24,710,369
            </div>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-primary">
            <div class="uk-card-body">
                <div class="uk-card-title">Influencers</div>
                1,151
            </div>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-secondary">
            <div class="uk-card-body">
                <div class="uk-card-title">Monthly Impressions</div>
                10,000,000
            </div>
        </div>
    </div>
</aside>