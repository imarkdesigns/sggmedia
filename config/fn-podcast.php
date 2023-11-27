<?php
function podVideo() {

    $podVideo = get_posts([
        'post_type' => [ 'podcasts' ],
        'posts_per_page' => -1,
        'post_status' => 'publish',
        'meta_query' => [
            'relation' => 'OR',
            [
                'key' => 'entry_url_source',
                'value' => 'video'
            ],
            [
                'key' => 'entry_url_source',
                'value' => 'shorts'
            ],
            [
                'key' => 'entry_url_source',
                'value' => 'podcast'
            ],
        ],
        'order' => 'DESC'

    ]);

    foreach ( $podVideo as $video ) : 
        $post_id = $video->ID;
        $post_title = $video->post_title;

        $caption = get_field( 'entry_description', $post_id );
        $clip = get_field( 'entry_url_source', $post_id );

        if ( $clip == 'video' || $clip == 'podcast' ) {

            $src_id  = get_field( 'entry_url_link', $post_id );
            $src_id = explode( '=', $src_id );
            $src_id = $src_id[1];

        } elseif ( $clip == 'shorts' ) {

            $src_id  = get_field( 'entry_url_link', $post_id );
            $src_id = explode( '/', $src_id );
            $src_id = $src_id[4];

        } ?>
        <div uk-lightbox>
            <figure class="video-item | uk-inline">
                <img src="https://img.youtube.com/vi/<?=$src_id;?>/0.jpg" alt="">
                <figcaption class="uk-overlay uk-overlay-default uk-position-bottom">
                    <h3><?php echo $post_title ?></h3>
                </figcaption>
                <a href="https://www.youtube-nocookie.com/watch?v=<?=$src_id;?>&rel=0" class="uk-position-cover" aria-label="Watch the Video" title="Watch Video" data-caption="<?=$caption?>" data-attrs="width: 1280; height: 720;"></a>
            </figure>
        </div>
        <?php 
    endforeach;

}
add_action( 'podVideo', 'podVideo' );

function liveDrive() {

    $podVideo = get_posts([
        'post_type' => [ 'podcasts' ],
        'posts_per_page' => -1,
        'post_status' => 'publish',
        'meta_query' => [
            'relation' => 'OR',
            [
                'key' => 'entry_url_source',
                'value' => 'video'
            ],
            [
                'key' => 'entry_url_source',
                'value' => 'shorts'
            ],
            [
                'key' => 'entry_url_source',
                'value' => 'podcast'
            ],
        ],
        'order' => 'DESC'

    ]);

    foreach ( $podVideo as $video ) : 
        $post_id = $video->ID;
        $post_title = $video->post_title;

        $caption = get_field( 'entry_description', $post_id );
        $clip = get_field( 'entry_url_source', $post_id );

        if ( $clip == 'video' || $clip == 'podcast' ) {

            $src_id  = get_field( 'entry_url_link', $post_id );
            $src_id = explode( '=', $src_id );
            $src_id = $src_id[1];

        } elseif ( $clip == 'shorts' ) {

            $src_id  = get_field( 'entry_url_link', $post_id );
            $src_id = explode( '/', $src_id );
            $src_id = $src_id[4];

        } ?>
        <div uk-lightbox>
            <figure class="video-item | uk-inline">
                <img src="https://img.youtube.com/vi/<?=$src_id;?>/0.jpg" alt="">
                <figcaption class="uk-overlay uk-overlay-default uk-position-bottom">
                    <h3><?php echo $post_title ?></h3>
                </figcaption>
                <a href="https://www.youtube-nocookie.com/watch?v=<?=$src_id;?>&rel=0" class="uk-position-cover" aria-label="Watch the Video" title="Watch Video" data-caption="<?=$caption?>" data-attrs="width: 1280; height: 720;"></a>
            </figure>
        </div>
        <?php 
    endforeach;

}
add_action( 'liveDrive', 'liveDrive' );

function intVideo() {

    $intVideo = get_posts([
        'post_type' => [ 'podcasts' ],
        'posts_per_page' => -1,
        'post_status' => 'publish',
        'meta_key' => 'entry_url_source',
        'meta_value' => 'interview',
        'order' => 'DESC'
    ]);


    foreach ( $intVideo as $interview ) :
        $post_id = $interview->ID;
        $post_title = $interview->post_title;

        $caption = get_field( 'entry_description', $post_id ); 
        $clip = get_field( 'entry_url_source', $post_id );

        $int_id  = get_field( 'entry_url_link', $post_id );
        $int_id = explode( '&', $int_id ); // trim & remove any additional parameter
        $int_id = explode( '=', $int_id[0] ); // trime the youtube id
        $int_id = $int_id[1];

        // TimeStart
        $int_time  = get_field( 'entry_url_link', $post_id );
        $int_time = explode( '&', $int_time );
        $int_time = explode( '=', $int_time[1] );

        if ( $int_time[1] ) {
            $int_time = $int_time[1];
        }

        ?>
        <div uk-lightbox>
            <figure class="video-item | uk-inline">
                <img src="https://img.youtube.com/vi/<?=$int_id;?>/0.jpg" alt="">
                <figcaption class="uk-overlay uk-overlay-default uk-position-bottom">
                    <h3><?php echo $post_title ?></h3>
                </figcaption>
                <a href="https://www.youtube-nocookie.com/watch?v=<?=$int_id;?>&rel=0&start=<?=$int_time;?>" class="uk-position-cover" aria-label="Watch the Video" title="Watch Video" data-caption="<?=$caption?>" data-attrs="width: 1280; height: 720;"></a>
            </figure>
        </div>
        <?php
    endforeach;

}
add_action( 'intVideo', 'intVideo' );