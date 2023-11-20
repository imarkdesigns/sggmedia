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
            <li><a href="<?php echo esc_url( get_permalink( 362 ) ); ?>">Careers</a></li>
            <li><a href="<?php echo esc_url( get_permalink( 108 ) ); ?>">Contact</a></li>
            <li><a href="<?php echo esc_url( get_permalink( 3 ) ); ?>">Privacy Policy</a></li>
        </ul>

    </div>
</div>