<?php
//! ===
//! Do not edit anything in this file unless you know what you're doing
//! ===

//* Assets Resources
add_action('wp_enqueue_scripts', function() {

    global $post;

    # UIkit version
    # 3.14.3
    wp_enqueue_style( 'uikit', _ui.'uikit.min.css' );
    wp_enqueue_script( 'uikit', _ui.'uikit.min.js', null, null, true );
    wp_enqueue_script( 'uikit-icon', _ui.'uikit-icons.min.js', null, null, true );

    # Extensions
    wp_enqueue_style( 'animate-css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
    wp_enqueue_style( 'carouselTicker-css', _uri.'/resources/carousel/carouselTicker.css' );
    wp_enqueue_script( 'carouselTicker-js', _uri.'/resources/carousel/jquery.carouselTicker.min.js', ['jquery'], null, true );

    wp_enqueue_style( 'fullPage-css', _uri.'/resources/scripts/fullpage/fullpage.min.css' );
    wp_enqueue_script( 'fullPage-js', _uri.'/resources/scripts/fullpage/fullpage.min.js', ['jquery'], null, true );

    // wp_enqueue_script( 'fullPageExt-js', _uri.'/resources/scripts/fullpage/fullpage.extensions.min.js', ['jquery'], null, true );
    // wp_enqueue_script( 'fp-scrollHorizontally-js', _uri.'/resources/scripts/fullpage/fullpage.scrollHorizontally.min.js', ['jquery'], null, true );
    // wp_enqueue_script( 'smoothState-js', _uri.'/resources/scripts/smoothState/jquery.smoothState.js', ['jquery'], null, true );

    wp_enqueue_style( 'fragments', _css.'fragments.css' );
    wp_enqueue_script( 'router', _js.'router.js', ['jquery'], null, true );    
        
    # Localize Scripts
    $dirPath = [ 'dirPath' => get_template_directory_uri() ];
    wp_localize_script( 'router', 'directory_uri', $dirPath );


    # Reset PostName
    $postName = '';

    if ( is_page() ) {

        # Enqueue Styles for Page
        switch ( $post->ID ) {

            // case '259': // Cost Effectiveness
            // case '261': // How It Works
            // case '295': // Revenue Streams
            case '2':   // Home
            case '58':  // Press Releases
            case '108': // Contact
            case '124': // Team
            case '302': // Content Creator Challege
            case '358': // Influencer Agreement
            case '362': // Careers
            case '469': // Podcast
            case '879': // Request Quote
            case '977': // Cloud Campaign
                $pageName = 'main';
                break;
                
            case '650': // Presentation
            case '700': // Presentation
                $pageName = 'presentation';
                break;

            case '3':   // Policy
                $pageName = 'legal';
                break;

        }
        wp_enqueue_style( 'page', _css.$pageName.'.css' );

    }

}, 100);    