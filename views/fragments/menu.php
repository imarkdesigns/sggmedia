<?php 
// WP Custom Logo
$customLogoID = get_theme_mod( 'custom_logo' );
$logo         = wp_get_attachment_image_src( $customLogoID, 'full' ); ?>

<a id="skipToLink" href="#main" class="skip-to-content-link">Skip to Content</a>
<div id="global-menu" class="uk-position-z-index uk-width-1-1" data-globals="menu" uk-sticky="start: 800; animation: uk-animation-slide-top">

    <nav uk-navbar class="uk-navbar-container uk-navbar-transparent">
        <div class="uk-navbar-left">
            <?php if ( is_page([ 302 ]) ) {
                echo '<a class="uk-logo" style="display:flex;align-items:center;height:80px;">';
                echo '<img src="'. $logo[0] .'" alt="'. get_bloginfo() .'" style="height:60px;">';
                echo '</a>';
            } else {
                echo '<a href="'.esc_url( home_url() ).'" class="uk-logo">';
                echo '<img src="'. $logo[0] .'" alt="'. get_bloginfo() .'">';
                echo '</a>';
            } ?>
        </div>
        <div class="uk-navbar-right">
            <button type="button" role="button" class="uk-navbar-toggle" uk-navbar-toggle-icon uk-toggle="target: #global-navigation" aria-label="Toggle Mobile Menu"></button>            
            <ul class="uk-subnav uk-margin-remove">
                <li class="icon-twitter"><a href="https://twitter.com/SGG_HQ" target="_blank" aria-label="Twitter"> <span uk-icon="icon: twitter"></span> </a></li>
                <li class="icon-instagram"><a href="https://www.instagram.com/sgg_hq/" target="_blank" aria-label="Instagram"> <span uk-icon="icon: instagram"></span> </a></li>
                <li class="icon-tiktok"><a href="https://www.tiktok.com/@sgghq" target="_blank" aria-label="TikTok"> <span uk-icon="icon: tiktok"></span> </a></li>
            </ul>
        </div>
    </nav>
</div>