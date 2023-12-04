<div id="mobile" uk-offcanvas="overlay: true">
    <div class="uk-offcanvas-bar">
        <button role="button" type="button" class="uk-offcanvas-close" uk-close  aria-label="Close Mobile Menu"></button>
        <figure class="uk-text-center">
            <?php echo '<img src="https://staging-sggmedia.kinsta.cloud/wp-content/uploads/2022/07/logo-sgg-media-white.png' .'" alt="'. get_bloginfo() .'">'; ?>
        </figure>
        <ul class="uk-nav-default uk-nav-parent-icon uk-nav-mobile uk-nav" uk-nav="">
            <?php if ( is_front_page() ) : ?>
            <li><a href="#home" data-anchor="home">Home</a></li>
            <?php else : ?>
            <li><a href="<?php echo esc_url( home_url() ); ?>" data-anchor="home">Home</a></li>
            <?php endif;
            if ( is_front_page() ) : ?>
                <li><a href="#aboutSGG" data-anchor="aboutSGG">About Us</a></li>
            <?php else : ?>
                <li><a href="<?php echo esc_url( get_permalink( 2 ).'#aboutSGG' ); ?>" data-anchor="aboutSGG">About Us</a></li>
            <?php endif; ?>           
            <li class="uk-parent"><a href="#">Advertise <span uk-icon="icon:triangle-down; ratio:.8;"></span></a>
                <ul class="uk-nav-sub uk-light">
                    <?php if ( is_front_page() ) : ?>
                    <li><a href="#microInfluencer" data-anchor="microInfluencer">What is a Micro-Influencer</a></li>
                    <?php else : ?>
                    <li><a href="<?php echo esc_url( get_permalink( 2 ).'#microInfluencer' ); ?>" data-anchor="microInfluencer">What is a Micro-Influencer</a></li>
                    <?php endif;
                    if ( is_front_page() ) : ?>
                    <li><a href="#onlineQuote" data-anchor="onlineQuote">Online Advertising Quote</a></li>
                    <?php else : ?>
                    <li><a href="<?php echo esc_url( get_permalink( 2 ).'#onlineQuote' ); ?>" data-anchor="onlineQuote">Online Advertising Quote</a></li>
                    <?php endif; ?>
                </ul>
            </li>            
            <?php if ( is_front_page() ) : ?>
                <li><a href="#managementTeam" data-anchor="managementTeam">Our Team</a></li>
            <?php else : ?>
                <li><a href="<?php echo esc_url( get_permalink( 2 ).'#managementTeam' ); ?>" data-anchor="managementTeam">Our Team</a></li>
            <?php endif; ?> 
            <li><a href="<?php echo esc_url( get_permalink( 58 ) ); ?>">Press</a></li>
            <li><a href="<?php echo esc_url( get_permalink( 469 ) ); ?>">Videos & Shows</a></li>
            <?php if ( is_front_page() ) : ?>
                <li><a href="#franchiseAds" data-anchor="franchiseAds">Franchises</a></li>
            <?php else : ?>
                <li><a href="<?php echo esc_url( get_permalink( 2 ).'#franchise' ); ?>" data-anchor="franchiseAds">Franchises</a></li>
            <?php endif; ?>
            <li hidden><a href="<?php echo esc_url( get_permalink( 362 ) ); ?>">Careers</a></li>
            <li><a href="<?php echo esc_url( get_permalink( 108 ) ); ?>">Contact</a></li>
            <li><a href="<?php echo esc_url( get_permalink( 3 ) ); ?>">Privacy Policy</a></li>
        </ul>

    </div>
</div>

<div id="global-navigation" class="uk-modal-full" uk-modal>
    <div class="uk-modal-dialog">
        <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
        <div class="uk-grid-collapse uk-child-width-1-2@s uk-flex-middle" uk-grid uk-height-viewport>
            <div class="uk-padding-large">

                <ul id="mobile-menu" class="uk-nav-default" uk-nav>
                    <li><a href="<?php do_action( 'menu_fallback', get_permalink( 2 ).'#home', '#home' ); ?>" data-anchor="home">Home</a></li>
                    <li class="uk-parent">
                        <a>About <span uk-nav-parent-icon></span></a>
                        <ul class="uk-nav-sub">
                            <li><a href="<?php do_action( 'menu_fallback', get_permalink( 2 ).'#aboutSGG', '#aboutSGG' ); ?>" data-anchor="aboutSGG">Who We Are</a></li>
                            <li><a href="<?php do_action( 'menu_fallback', get_permalink( 2 ).'#aboutSGG/what-we-do', '#aboutSGG/what-we-do' ); ?>" data-anchor="aboutSGG">What We Do</a></li>
                            <li><a href="<?php do_action( 'menu_fallback', get_permalink( 2 ).'#managementTeam', '#managementTeam' ); ?>" data-anchor="managementTeam">Team</a></li>
                            <li><a href="<?php do_action( 'menu_fallback', get_permalink( 2 ).'#microInfluencer', '#microInfluencer' ); ?>" data-anchor="microInfluencer">Micro Influencers</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php do_action( 'menu_fallback', get_permalink( 2 ).'#adsPosting', '#adsPosting' ); ?>" data-anchor="adsPosting">Social Postings</a></li>
                    <li><a href="<?php do_action( 'menu_fallback', get_permalink( 2 ).'#franchiseAds', '#franchiseAds' ); ?>" data-anchor="franchiseAds">Franchise Advertising</a></li>
                    <li><a href="<?php do_action( 'menu_fallback', get_permalink( 2 ).'#onlineQuote', '#onlineQuote' ); ?>" data-anchor="onlineQuote">Online Quote</a></li>
                    <li class="uk-parent">
                        <a>Videos & Shows <span uk-nav-parent-icon></span></a>
                        <ul class="uk-nav-sub">
                            <li><a href="<?php do_action( 'menu_fallback', get_permalink( 2 ).'#videoShows', '#videoShows' ); ?>" data-anchor="videoShows">Videos & Shows</a></li>
                            <?php if ( is_page( 469 ) ) : ?>
                                <li><a uk-scroll="offset: 80" href="#LDS" >Live Drive Stream</a></li>
                                <li><a uk-scroll="offset: 80" href="#SSP">Splash Sisters Show</a></li>
                            <?php else : ?>
                                <li><a href="<?php echo get_permalink( 469 ).'#sgg-LDS'; ?>" >Live Drive Stream</a></li>
                                <li><a  href="<?php echo get_permalink( 469 ).'#sgg-SSP'; ?>">Splash Sisters Show</a></li>
                            <?php endif; ?>
                        </ul>
                    </li>
                    <li><a href="<?php echo esc_url( get_permalink( 58 ) ); ?>">Press</a></li>
                    <li><a href="<?php echo esc_url( get_permalink( 108 ) ); ?>">Contact</a></li>
                </ul>

            </div>
            <div class="uk-background-cover uk-visible@m" data-src="<?php echo _uri.'/resources/images/bg-global-navigation.jpg'; ?>" uk-img>
                <div class="uk-panel">
                    <img src="<?php echo _uri.'/resources/images/logo-sgg-media-white.png'; ?>" alt="<?php bloginfo(); ?>">

                    <h2>Get an Advertising</h2>
                    <h3>Quote in Seconds</h3>

                    <a id="modal-online-quote" href="#onlineQuote" data-anchor="onlineQuote" class="uk-button uk-button-primary uk-button-large">Click Here</a>
                </div>
            </div>
        </div>
    </div>
</div>