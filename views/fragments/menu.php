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
            <?php if ( isset($_GET['altmenu']) && $_GET['altmenu'] == '1' ) : ?>
                <button type="button" role="button" class="uk-navbar-toggle" uk-navbar-toggle-icon uk-toggle="target: #global-navigation" aria-label="Toggle Mobile Menu"></button>                
                <ul class="uk-subnav uk-margin-remove">
                    <li class="icon-twitter"><a href="https://twitter.com/SGG_HQ" target="_blank" aria-label="Twitter"> <span uk-icon="icon: twitter"></span> </a></li>
                    <li class="icon-instagram"><a href="https://www.instagram.com/sgg_hq/" target="_blank" aria-label="Instagram"> <span uk-icon="icon: instagram"></span> </a></li>
                    <li class="icon-tiktok"><a href="https://www.tiktok.com/@sgghq" target="_blank" aria-label="TikTok"> <span uk-icon="icon: tiktok"></span> </a></li>
                </ul>
            <?php else : ?>
                <ul id="main-menu" class="uk-navbar-nav uk-visible@l">
                    <li><a href="<?php do_action( 'menu_fallback', get_permalink( 2 ).'#home', '#home' ); ?>" data-anchor="home">Home</a></li>
                    <li class="uk-parent">
                        <a href="#">About <span uk-icon="icon:triangle-down; ratio:.8;"></span></a>
                        <div uk-dropdown="mode: click; offset: 0">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li><a href="<?php do_action( 'menu_fallback', get_permalink( 2 ).'#aboutSGG', '#aboutSGG' ); ?>" data-anchor="aboutSGG">Who We Are</a></li>
                                <li><a href="<?php do_action( 'menu_fallback', get_permalink( 2 ).'#aboutSGG/what-we-do', '#aboutSGG' ); ?>" data-anchor="aboutSGG">What We Do</a></li>
                                <li><a href="<?php do_action( 'menu_fallback', get_permalink( 2 ).'#managementTeam', '#managementTeam' ); ?>" data-anchor="managementTeam">Team</a></li>
                                <li><a href="<?php do_action( 'menu_fallback', get_permalink( 2 ).'#microInfluencer', '#microInfluencer' ); ?>" data-anchor="microInfluencer">Micro Influencers</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="<?php do_action( 'menu_fallback', get_permalink( 2 ).'#adsPosting', '#adsPosting' ); ?>" data-anchor="adsPosting">Social Postings</a></li>
                    <li><a href="<?php do_action( 'menu_fallback', get_permalink( 2 ).'#franchiseAds', '#franchiseAds' ); ?>" data-anchor="franchiseAds">Franchise Advertising</a></li>
                    <li><a href="<?php do_action( 'menu_fallback', get_permalink( 2 ).'#onlineQuote', '#onlineQuote' ); ?>" data-anchor="onlineQuote">Online Quote</a></li>
                    <li class="uk-parent">
                        <a href="#">Videos & Shows <span uk-icon="icon:triangle-down; ratio:.8;"></span></a>
                        <div uk-dropdown="mode: click; offset: 0">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li><a href="<?php do_action( 'menu_fallback', get_permalink( 2 ).'#videoShows', '#videoShows' ); ?>" data-anchor="videoShows">Videos & Shows</a></li>
                                <li><a href="<?php echo get_permalink( 469 ).'#sgg-LDS' ?>">Live Drive Stream</a></li>
                                <li><a href="<?php echo get_permalink( 469 ).'#sgg-SSP' ?>">Splash Sisters Show</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="<?php echo esc_url( get_permalink( 58 ) ); ?>" data-anchor="onlineQuote">Press</a></li>
                    <li><a href="<?php echo esc_url( get_permalink( 108 ) ); ?>" data-anchor="onlineQuote">Contact</a></li>
                </ul>            
                <ul class="uk-subnav uk-margin-remove">
                    <li class="icon-twitter"><a href="https://twitter.com/SGG_HQ" target="_blank" aria-label="Twitter"> <span uk-icon="icon: twitter"></span> </a></li>
                    <li class="icon-instagram"><a href="https://www.instagram.com/sgg_hq/" target="_blank" aria-label="Instagram"> <span uk-icon="icon: instagram"></span> </a></li>
                    <li class="icon-tiktok"><a href="https://www.tiktok.com/@sgghq" target="_blank" aria-label="TikTok"> <span uk-icon="icon: tiktok"></span> </a></li>
                </ul>
                <button type="button" role="button" class="uk-navbar-toggle uk-hidden@l" uk-navbar-toggle-icon uk-toggle="target: #global-navigation" aria-label="Toggle Mobile Menu"></button>
            <?php endif; ?>           
        </div>
    </nav>
</div>