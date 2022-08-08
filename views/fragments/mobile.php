<div id="mobile" uk-offcanvas="overlay: true">
    <div class="uk-offcanvas-bar">
        <button role="button" type="button" class="uk-offcanvas-close" uk-close  aria-label="Close Mobile Menu"></button>
        <figure class="uk-text-center">
            <?php echo '<img src="https://staging-sggmedia.kinsta.cloud/wp-content/uploads/2022/07/logo-sgg-media-white.png' .'" alt="'. get_bloginfo() .'">'; ?>
        </figure>
        <ul class="uk-nav-default uk-nav-parent-icon uk-nav-mobile uk-nav" uk-nav="">
            <li><a href="<?php echo esc_url( home_url() ); ?>">Home</a></li>
            <?php if ( is_front_page() ) : ?>
                <li><a uk-scroll="offset: 70" href="<?php echo esc_url( site_url('#who-we-are') ); ?>">Who We Are</a></li>
                <li><a uk-scroll="offset: 70" href="<?php echo esc_url( site_url('#what-we-do') ); ?>">What We Do</a></li>
                <li><a uk-scroll="offset: 70" href="<?php echo esc_url( site_url('#partners') ); ?>">Partners & Ad Samples</a></li>
            <?php else : ?>
                <li><a href="<?php echo esc_url( site_url('#sgg-who-we-are') ); ?>">Who We Are</a></li>
                <li><a href="<?php echo esc_url( site_url('#sgg-what-we-do') ); ?>">What We Do</a></li>
                <li><a href="<?php echo esc_url( site_url('#sgg-partners') ); ?>">Partners & Ad Samples</a></li>
            <?php endif; ?>
            <li><a href="<?php echo esc_url( get_permalink( 124 ) ); ?>">Our Team</a></li>
            <li><a href="<?php echo esc_url( get_permalink( 58 ) ); ?>">Press</a></li>
            <li><a href="<?php echo esc_url( get_permalink( 108 ) ); ?>">Contact</a></li>
            <li><a href="<?php echo esc_url( get_permalink( 3 ) ); ?>">Privacy Policy</a></li>
        </ul>

    </div>
</div>