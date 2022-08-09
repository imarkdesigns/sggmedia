<main id="main" class="main uk-position-relative" role="main">

    <?php if ( have_rows( 'introduction_group' ) ) : ?>
    <section class="uk-section | introduction">
        <div class="uk-container">
            <div class="uk-grid-match" uk-grid>
            <?php while ( have_rows( 'introduction_group' ) ): the_row(); ?>
                <div class="uk-width-1-2@m">
                    <div class="uk-card uk-card-small">
                        <div class="uk-card-body">
                            <div class="uk-card-title">What's Now</div>
                            <?php the_sub_field( 'ig_whatsnow' ); ?>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-2@m">
                    <div class="uk-card uk-card-small">
                        <div class="uk-card-body">
                            <div class="uk-card-title">What's Next</div>
                            <?php the_sub_field( 'ig_whatsnext' ); ?>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-1">
                    <div class="uk-card uk-card-small">
                        <div class="uk-card-body">
                            <div class="uk-card-title">What's Possible</div>
                            <?php the_sub_field( 'ig_whatspossible' ); ?>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
            </div>
        </div>
    </section>
    <?php endif; 

    if ( have_rows( 'influencers_group' ) ) : ?>
    <section class="uk-section uk-section-muted | influencers-graph">
        <div class="uk-container uk-container-large">
            <div class="uk-grid-divider uk-flex-middle" uk-grid>
            <?php while( have_rows( 'influencers_group' ) ) : the_row(); 

                $chart = get_sub_field( 'influencers_chart' ); ?>
                <div class="uk-width-1-1">
                    <div class="uk-panel uk-text-center">
                        <h2><?php the_sub_field( 'influencers_title' ); ?></h2>
                        <p><?php the_sub_field( 'influencers_description' ); ?></p>
                    </div>
                </div>
                <div class="uk-width-2-3@m">
                    <div class="chart-container">
                        <canvas id="myChart"></canvas>
                    </div>
                </div>
                <div class="uk-width-1-3@m">
                    <div class="uk-panel uk-position-relative" uk-lightbox>
                        <a href="<?php echo $chart['url']; ?>" class="uk-position-small uk-position-top-right" uk-tooltip="Enlarge Photo" data-caption="25 Million+ Sports Fan"> <span uk-icon="image"></span> </a>
                        <?php if ( !empty( $chart ) ) {
                            echo wp_get_attachment_image( $chart['id'], 'medium' );
                        } ?>
                    </div>
                </div>
            <?php endwhile; ?>
            </div>
        </div>
    </section>
    <?php endif; 

    if ( have_rows( 'behind_group' ) ) : ?>
    <section class="uk-section | behind-sgg">
        <?php while ( have_rows( 'behind_group' ) ) : the_row(); 

        $imgWhoWeAre = get_sub_field( 'bg_whoweare_background' );
        $imgWhatWeDo = get_sub_field( 'bg_whatwedo_background' ); ?>
        <article id="who-we-are" class="uk-grid-collapse uk-grid-match uk-flex-middle | who-we-are" uk-grid>
            <div class="uk-width-1-2@m uk-width-2-3@l">
                <div class="uk-cover-container">
                    <?php if ( !empty( $imgWhoWeAre ) ) {
                        echo wp_get_attachment_image( $imgWhoWeAre['id'], 'medium', '', [ 'uk-cover' => '' ] );
                    } else {
                        echo '<img src="'._uri.'/resources/images/advertise/sgg-who-we-are.jpg" alt="" uk-cover>';
                    } ?>
                </div>
            </div>
            <div class="uk-width-1-2@m uk-width-1-3@l">
                <div class="uk-panel">
                    <?php the_sub_field( 'bg_whoweare_content' ); ?>
                </div>
            </div>
        </article>

        <article id="what-we-do" class="uk-grid-collapse uk-grid-match uk-flex-middle | what-we-do" uk-grid>
            <div class="uk-width-1-2@m uk-width-2-3@l">
                <div class="uk-cover-container">
                    <?php if ( !empty( $imgWhatWeDo ) ) {
                        echo wp_get_attachment_image( $imgWhatWeDo['id'], 'medium', '', [ 'uk-cover' => '' ] );
                    } else {
                        echo '<img src="'._uri.'/resources/images/advertise/sgg-what-we-do.jpg" alt="" uk-cover>';
                    } ?>                    
                </div>
            </div>            
            <div class="uk-width-1-2@m uk-width-1-3@l uk-flex-last uk-flex-first@m">
                <div class="uk-panel">
                    <?php the_sub_field( 'bg_whatwedo_content' ); ?>
                </div>
            </div>          
        </article>
        <?php endwhile; ?>
    </section>
    <?php endif; ?>

    <section class="uk-section uk-section-secondary | partners ">
        <div class="uk-container">
            
            <h2><?php the_field( 'partners_title' ); ?></h2>
            <div id="partners" class="grid-wrapper">
            <?php while ( have_rows( 'partners_group' ) ) : the_row();
                $imgPartners = get_sub_field( 'pg_photo' );
                $imgModals   = get_sub_field( 'pg_samples' );
                ?>
                <figure class="uk-card uk-card-secondary">
                <?php

                    if ( !empty($imgModals) ) : ?>
                    <div class="uk-card-badge uk-label uk-link-reset">
                        <button type="button" title="View Example Advertising Examples" uk-toggle="target: #ads-<?php echo $imgPartners['id']; ?>">View Ad Sample</button>
                    </div>
                    <?php endif; ?>
                    <div class="uk-card-media-top">
                        <?php if ( !empty( $imgPartners ) ) {
                            echo wp_get_attachment_image( $imgPartners['id'], 'full' );
                        } ?>
                    </div>
                </figure>

                <?php if ( !empty($imgModals) ) : ?>
                <div id="ads-<?php echo $imgPartners['id']; ?>" class="uk-flex-top | sample-ads" uk-modal>
                    <div class="uk-modal-dialog uk-margin-auto-vertical uk-text-center">
                        <button class="uk-modal-close-default" type="button" uk-close aria-label="Close Modal"></button>
                        <h2> <?php echo $imgPartners['title']; ?> <small>Advertising Example</small> </h2>
                        <div class="uk-child-width-1-2@m uk-grid-small uk-flex-top" uk-grid>
                            <?php foreach ( $imgModals as $modal ) : ?>
                            <div>
                                <figure>
                                    <?php echo wp_get_attachment_image( $modal['id'], 'full' ); ?>
                                </figure>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <?php
                endif; // End Modal

            endwhile; // End Loop ?>
            </div>

        </div>
    </section>

    <?php include( locate_template( _frg.'colophon.php', false, true ) ); ?>

</main>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
const data = {
    datasets: [{
        label: 'Traditional Advertising CPM',
        maxBarThickness: 50,
        // barThickness: 45,
        barPercentage: 1.0,
        categoryPercentage: 1.0,
        backgroundColor: [ 'rgb(248,117,19)' ],
        data: [
            { x: 'National TV Ads', y:25 },
            { x: 'Sports Radio Ads', y:20, },
            { x: 'Google Display Ads', y:7.14, },
            { x: 'Instagram Ads', y:15.82, },
            { x: 'Twitter Ads', y:12.82, }
        ],
    }, {
        label: 'SGG Advertising CPM',
        maxBarThickness: 50,
        // barThickness: 45,
        barPercentage: 1.0,
        categoryPercentage: 1.0,        
        backgroundColor: [ 'rgb(40,167,80)' ],
        data: [
            { x: 'SGG Instagram Influencers (Impressions)', y:3.88 },
            { x: 'SGG Twitter Influencers (Impressions)', y:4.53, },
            { x: 'SGG Instagram Influencers (Followers)', y:2.16, },
            { x: 'SGG Twitter Influencers (Followers)', y:2.10, }
        ],

    }]
};

const config = {
    type: 'bar',
    data: data,
    options: {
        maintainAspectRatio: false,
        scales: {
            y: {
              stacked: false,
              grid: {
                display: true,
                color: "rgba(255,99,132,0.2)"
              }
            },
            x: {
                grid: {
                  display: false
                }
            }
        },
        plugins: {
            title: {
                display: true,
                text: 'Dollar Rate ($)',
                position: 'left'
            }
        }
    }
};

const myChart = new Chart(
    document.getElementById('myChart'),
    config
);
</script>