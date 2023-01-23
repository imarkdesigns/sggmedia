<?php 
// WP Custom Logo
$customLogoID = get_theme_mod( 'custom_logo' );
$logo         = wp_get_attachment_image_src( $customLogoID, 'full' ); ?>

<a id="skipToLink" href="#main" class="skip-to-content-link">Skip to Content</a>
<div class="uk-position-z-index uk-width-1-1" data-globals="menu" uk-sticky="start: 800; animation: uk-animation-slide-top">

    <nav uk-navbar class="uk-navbar-container uk-navbar-transparent">
        <div class="uk-navbar-left">
            <?php if ( is_front_page() ) {
                echo '<a href="'.esc_url( home_url() ).'" class="uk-logo">';
                echo '<img src="'. $logo[0] .'" alt="'. get_bloginfo() .'">';
                echo '</a>';
            } elseif ( is_page([ 302 ]) ) {
                echo '<a class="uk-logo" style="display:flex;align-items:center;height:80px;">';
                echo '<img src="'. $logo[0] .'" alt="'. get_bloginfo() .'" style="height:60px;">';
                echo '</a>';
            } else {
                echo '<a href="'.esc_url( home_url() ).'" class="uk-logo">';
                echo '<img src="'. $logo[0] .'" alt="'. get_bloginfo() .'">';
                echo '</a>';
            } ?>
        </div>
        <?php if ( !is_page([ 302 ]) ) : ?>
        <div class="uk-navbar-right">
            <ul class="uk-navbar-nav uk-visible@l">
                <li><a href="<?php echo esc_url( home_url() ); ?>">Home</a></li>
                <?php if ( is_front_page() ) : ?>
                <li><a uk-scroll="offset: 125" href="<?php echo esc_url( site_url('#about') ); ?>">About Us</a></li>
                <li><a uk-scroll="offset: 125" href="<?php echo esc_url( site_url('#partners') ); ?>">Partners & Ad Samples</a></li>
                <?php else : ?>
                <li><a href="<?php echo esc_url( site_url('#sgg-about') ); ?>">About Us</a></li>
                <li><a href="<?php echo esc_url( site_url('#sgg-partners') ); ?>">Partners & Ad Samples</a></li>
                <?php endif; ?>                
                <li class="uk-parent"><a href="#">Advertise <span uk-icon="icon:triangle-down; ratio:.8;"></span></a>
                    <div class="uk-navbar-dropdown">
                        <ul class="uk-nav uk-navbar-dropdown-nav">
                            <?php if ( is_front_page() ) : ?>
                            <li><a uk-scroll="offset: 125" href="<?php echo esc_url( site_url('#chart') ); ?>">Cost Effectiveness</a></li>
                            <li><a uk-scroll="offset: 125" href="<?php echo esc_url( site_url('#connection') ); ?>">How It Works</a></li>
                            <li><a uk-scroll="offset: 125" href="<?php echo esc_url( site_url('#revenue') ); ?>">SGG Revenue Streams</a></li>
                            <?php else : ?>
                            <li><a href="<?php echo esc_url( get_permalink( 2 ).'#sgg-chart' ); ?>">Cost Effectiveness</a></li>
                            <li><a href="<?php echo esc_url( get_permalink( 2 ).'#sgg-connection' ); ?>">How It Works</a></li>
                            <li><a href="<?php echo esc_url( get_permalink( 2 ).'#sgg-revenue' ); ?>">SGG Revenue Streams</a></li>
                            <?php endif; ?> 
                        </ul>
                    </div>
                </li>
                <?php if ( is_front_page() ) : ?>
                <li><a uk-scroll="offset: 90" href="<?php echo esc_url( site_url('#team') ); ?>">Our Team</a></li>
                <?php else : ?>
                <li><a href="<?php echo esc_url( site_url('#sgg-team') ); ?>">Our Team</a></li>
                <?php endif; ?> 
                <li><a href="#">Videos & Podcasts</a></li>
                <li><a href="<?php echo esc_url( get_permalink( 58 ) ); ?>">Press</a></li>
                <li><a href="<?php echo esc_url( get_permalink( 362 ) ); ?>">Careers</a></li>
                <li><a href="<?php echo esc_url( get_permalink( 108 ) ); ?>">Contact Us</a></li>
            </ul>
            <ul class="uk-subnav uk-margin-remove uk-visible@l">
                <li class="icon-twitter"><a href="https://twitter.com/SGG_HQ" target="_blank" aria-label="Twitter"> <span uk-icon="icon: twitter"></span> </a></li>
                <li class="icon-instagram"><a href="https://www.instagram.com/sgg_hq/" target="_blank" aria-label="Instagram"> <span uk-icon="icon: instagram"></span> </a></li>
                <li class="icon-tiktok"><a href="https://www.tiktok.com/@sgghq" target="_blank" aria-label="TikTok"> <span uk-icon="icon: tiktok"></span> </a></li>
            </ul>
            <button type="button" role="button" class="uk-navbar-toggle uk-hidden@l" uk-navbar-toggle-icon uk-toggle="target: #mobile" aria-label="Toggle Mobile Menu"></button>
        </div>
        <?php endif; ?>
    </nav>

</div>