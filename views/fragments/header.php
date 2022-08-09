<?php 
if ( is_front_page() ) : 

$hdr_bg = get_field( 'bg_header', 'options' );
$hdr_content = get_field( 'bg_content', 'options' ); ?>

<aside class="uk-margin-remove uk-text-center | tagline" uk-alert> <span class="uk-h3"><?php echo get_bloginfo( 'name' ).' - '.get_bloginfo( 'description' ); ?></span> </aside>
<header class="hero" data-hero="home" data-src="<?php echo $hdr_bg['url']; ?>" uk-img>
    <div class="uk-width-1-1@s uk-width-2-3@m uk-light uk-position-z-index | hero-container" uk-scrollspy="cls: uk-animation-slide-bottom-medium; delay: 300">
        <?php echo $hdr_content; ?>
    </div>
    <div class="uk-overlay-primary uk-position-cover"></div>
</header>
<aside class="uk-background-muted uk-grid-collapse uk-grid-match uk-flex-middle | ticker" uk-grid uk-height-match="target: > div > .uk-card">
    <div>
        <div class="uk-card uk-card-secondary | followers">
            <div class="uk-card-body">
                <div class="uk-card-title">Social Media Followers</div>
                <span id="total-followers"> <small>loading...</small> </span>
            </div>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-primary | influencers">
            <div class="uk-card-body">
                <div class="uk-card-title">Influencers</div>
                <span id="total-influencers">1,151</span>
            </div>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-secondary | impressions">
            <div class="uk-card-body">
                <div class="uk-card-title"><small>Impressions Over the</small> Last 30 Days</div>
                <span id="total-impressions"> <small>loading...</small> </span>
            </div>
        </div>
    </div>
</aside>
<?php else : 

$hdr_contents = get_field( 'hdr_content' ); ?>
<header class="hero" data-hero="page" data-src="<?php echo $hdr_contents['hdr_bg']['url']; ?>" uk-img>
    <div class="uk-overlay-primary uk-position-cover"></div>
    <div class="uk-overlay uk-position-center" uk-scrollspy="target: > h1; cls: uk-animation-fade; delay: 300">
        <h1> <small><?php echo $hdr_contents['text_info']; ?></small> <?php echo $hdr_contents['text_title']; ?></h1>
    </div>

    <aside class="uk-grid-collapse uk-grid-match uk-flex-middle uk-position-bottom uk-width-1-1 | ticker-alt" uk-grid uk-height-match="target: > div > .uk-card">
        <div>
            <div class="uk-card uk-card-secondary | followers">
                <div class="uk-card-body">
                    <div class="uk-card-title">Social Media Followers</div>
                    <span id="total-followers"> <small>loading...</small> </span>
                </div>
            </div>
        </div>
        <div>
            <div class="uk-card uk-card-primary | influencers">
                <div class="uk-card-body">
                    <div class="uk-card-title">Influencers</div>
                    <span id="total-influencers">1,151</span>
                </div>
            </div>
        </div>
        <div>
            <div class="uk-card uk-card-secondary | impressions">
                <div class="uk-card-body">
                    <div class="uk-card-title"><small>Impressions Over the</small> Last 30 Days</div>
                    <span id="total-impressions"> <small>loading...</small> </span>
                </div>
            </div>
        </div>
    </aside>    
</header>

<?php endif; ?>