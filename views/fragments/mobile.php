<div id="mobile" uk-offcanvas="overlay: true">
    <div class="uk-offcanvas-bar">
        <button role="button" type="button" class="uk-offcanvas-close" uk-close  aria-label="Close Mobile Menu"></button>
        <figure class="uk-text-center">
            <?php echo '<img src="https://staging-sggmedia.kinsta.cloud/wp-content/uploads/2022/07/logo-sgg-media-white.png' .'" alt="'. get_bloginfo() .'">'; ?>
        </figure>
        <ul class="uk-nav-default uk-nav-parent-icon uk-nav-mobile uk-nav" uk-nav="">
            <li><a href="<?php echo esc_url( home_url() ); ?>">Home</a></li>
            <li><a href="<?php echo '#'; ?>">Who We Are</a></li>
            <li><a href="<?php echo '#'; ?>">What We Do</a></li>
            <li><a href="<?php echo '#'; ?>">Our Partners</a></li>
            <li><a href="<?php echo '#'; ?>">Advertising Examples</a></li>
            <li><a href="<?php echo '#'; ?>">Our Team</a></li>
            <li><a href="<?php echo esc_url( get_permalink( 58 ) ); ?>">Press</a></li>
            <li><a href="<?php echo esc_url( get_permalink( 108 ) ); ?>">Contact</a></li>
            <li><a href="<?php echo esc_url( get_permalink( 3 ) ); ?>">Privacy Policy</a></li>
        </ul>

    </div>
</div>