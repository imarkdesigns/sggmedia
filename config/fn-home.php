<?php 

## Homepage function collections

// replace the [br] to <br>
function hdr( $field ) {

    $field = str_replace( '[br]', '<br>', $field );
    echo $field;

}
add_action( 'hdr', 'hdr', 1 );

