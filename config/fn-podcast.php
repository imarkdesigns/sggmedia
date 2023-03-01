<?php

function podVideo() {

    $podVideo = get_posts([
        'post_type' => [ 'podcasts' ],
        'posts_per_page' => 6,
        'post_status' => 'publish',
        'meta_key' => 'entry_url_source',
        'meta_value' => 'video',
        'order' => 'DESC'

    ]);

    foreach ( $podVideo as $video ) : 
        $post_id = $video->ID;
        $post_title = $video->post_title;

        $caption = get_field( 'entry_description', $post_id );
        $src_id  = get_field( 'entry_url_link', $post_id );

        $src_id = explode( '/', $src_id );
        
        ?>
        <div uk-lightbox>
            <figure class="video-item | uk-inline">
                <img src="https://img.youtube.com/vi/<?=$src_id[4]?>/0.jpg" alt="">
                <figcaption class="uk-overlay uk-overlay-default uk-position-bottom">
                    <h3><?php echo $post_title ?></h3>
                </figcaption>
                <a href="https://www.youtube-nocookie.com/watch?v=<?=$src_id[4]?>&rel=0" class="uk-position-cover" aria-label="Watch the Video" title="Watch Video" data-caption="<?=$caption?>" data-attrs="width: 1280; height: 720;"></a>
            </figure>
        </div>
    <?php endforeach;

}
add_action( 'podVideo', 'podVideo' );