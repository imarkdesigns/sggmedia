<?php 
// WP Custom Logo
$customLogoID = get_theme_mod( 'custom_logo' );
$logo         = wp_get_attachment_image_src( $customLogoID, 'full' ); ?>

<a id="skipToLink" href="#main" class="skip-to-content-link">Skip to Content</a>
<div class="uk-position-z-index" data-globals="menu">

    <nav uk-navbar class="uk-navbar-container uk-navbar-transparent">
        <div class="uk-navbar-left">
            <a href="<?php echo esc_url( home_url() ); ?>" class="uk-logo">
                <?php echo '<img src="'. $logo[0] .'" alt="'. get_bloginfo() .'">'; ?>
            </a>
        </div>
        <div class="uk-navbar-right">
            <ul class="uk-navbar-nav uk-visible@l">
                <li><a href="<?php echo esc_url( home_url() ); ?>">Home</a></li>
                <li><a href="<?php echo esc_url( get_permalink( 58 ) ); ?>">SGG Press Releases</a></li>
                <li><a href="<?php echo esc_url( get_permalink( 56 ) ); ?>">Careers</a></li>
                <li><a href="<?php echo esc_url( get_permalink( 108 ) ); ?>">Contact Us</a></li>
            </ul>
            <button type="button" role="button" class="uk-navbar-toggle uk-hidden@l" uk-navbar-toggle-icon uk-toggle="target: #mobile"></button>
        </div>
    </nav>

</div>