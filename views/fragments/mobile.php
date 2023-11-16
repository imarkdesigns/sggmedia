<div id="mobile" uk-offcanvas="overlay: true">
    <div class="uk-offcanvas-bar">
        <button role="button" type="button" class="uk-offcanvas-close" uk-close  aria-label="Close Mobile Menu"></button>
        <figure class="uk-text-center">
            <?php echo '<img src="https://staging-sggmedia.kinsta.cloud/wp-content/uploads/2022/07/logo-sgg-media-white.png' .'" alt="'. get_bloginfo() .'">'; ?>
        </figure>
        <ul class="uk-nav-default uk-nav-parent-icon uk-nav-mobile uk-nav" uk-nav="">
            <li><a href="<?php echo esc_url( home_url() ); ?>">Home</a></li>
             <?php if ( is_front_page() ) : ?>
                <li><a uk-scroll="offset: 225" href="<?php echo esc_url( site_url('#about') ); ?>">About Us</a></li>
            <?php else : ?>
                <li><a href="<?php echo esc_url( site_url('#sgg-about') ); ?>">About Us</a></li>
            <?php endif; ?>           
            <li class="uk-parent"><a href="#">Advertise <span uk-icon="icon:triangle-down; ratio:.8;"></span></a>
                <ul class="uk-nav-sub uk-light">
                    <?php if ( is_front_page() ) : ?>
                    <li><a uk-scroll="offset: 125" href="<?php echo esc_url( site_url('#micro-influencer') ); ?>">What is a Micro-Influencer</a></li>
                    <?php else : ?>
                    <li><a href="<?php echo esc_url( get_permalink( 2 ).'#micro-influencer' ); ?>">What is a Micro-Influencer</a></li>
                    <?php endif; ?> 
                    <li><a href="<?php echo esc_url( get_permalink( 879 ) ); ?>">On-Line Advertising Quote</a></li>
                </ul>
            </li>            
            <?php if ( is_front_page() ) : ?>
                <li><a uk-scroll="offset: 225" href="<?php echo esc_url( site_url('#team') ); ?>">Our Team</a></li>
            <?php else : ?>
                <li><a href="<?php echo esc_url( site_url('#sgg-team') ); ?>">Our Team</a></li>
            <?php endif; ?> 
            <li><a href="<?php echo esc_url( get_permalink( 58 ) ); ?>">Press</a></li>
            <li><a href="<?php echo esc_url( get_permalink( 469 ) ); ?>">Videos & Shows</a></li>
            <?php if ( is_front_page() ) : ?>
                <li><a uk-scroll="offset: 90" href="<?php echo esc_url( site_url('#franchise') ); ?>">Franchises</a></li>
            <?php else : ?>
                <li><a href="<?php echo esc_url( get_permalink( 2 ).'#franchise' ); ?>">Franchises</a></li>
            <?php endif; ?>
            <li><a href="<?php echo esc_url( get_permalink( 362 ) ); ?>">Careers</a></li>
            <li><a href="<?php echo esc_url( get_permalink( 108 ) ); ?>">Contact</a></li>
            <li><a href="<?php echo esc_url( get_permalink( 3 ) ); ?>">Privacy Policy</a></li>
        </ul>

    </div>
</div>