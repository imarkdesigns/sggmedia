<?php 
$bgHdr = get_field( 'bg_header', 'option' ); 
$bgContent = get_field( 'bg_content', 'option' ); 


if ( is_front_page() ) : ?>

<aside class="uk-margin-remove uk-text-center | tagline" uk-alert> <span class="uk-h3">SGG Media - A Division of Sports Gambling Guides, Inc.</span> </aside>
<header class="hero" data-hero="home" data-src="<?php echo _uri.'/resources/images/img-sggmedia-header.jpg'; ?>" uk-img>
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
        $hdrTitle = '<small>SGG Media</small> National Headline News';
        break;

    case '108':
        $hdrImg = _uri.'/resources/images/sggmedia-header-contact.jpg';
        $hdrTitle = '<small>Interested?</small> Let\'s Connect';
        break;
} ?>

<header class="hero" data-hero="page" data-src="<?php echo $hdrImg; ?>" uk-img>
    <div class="uk-overlay-primary uk-position-cover"></div>
    <div class="uk-overlay uk-position-center" uk-scrollspy="target: > h1; cls: uk-animation-fade; delay: 300">
        <h1> <?php echo $hdrTitle; ?> </h1>
    </div>
</header>

<?php endif; ?>
<aside class="uk-background-muted uk-grid-collapse uk-grid-match uk-flex-middle | ticker" uk-grid uk-height-match="target: > div > .uk-card">
    <div>
        <div class="uk-card uk-card-secondary | followers">
            <div class="uk-card-body">
                <div class="uk-card-title">Social Media Followers</div>
                <span id="total-followers"></span>
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
                <div class="uk-card-title"><small>Impressions Over the</small> Last 30 Days</div>
                <span id="total-impressions"></span>
            </div>
        </div>
    </div>
</aside>