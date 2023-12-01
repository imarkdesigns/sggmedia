<?php 

## Homepage function collections

// replace the [br] to <br>
function hdr( $field ) {

    $field = str_replace( '[br]', '<br>', $field );
    echo $field;

}
add_action( 'hdr', 'hdr', 10, 1 );

// replace anchor with fallback
function menu_fallback( $alternative, $hashtag ) {

    if ( !is_page( 2 ) ) {
        echo $alternative;
    } else {
        echo $hashtag;
    }

}
add_action( 'menu_fallback', 'menu_fallback', 10, 2 );