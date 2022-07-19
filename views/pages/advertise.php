<main id="main" class="main uk-position-relative" role="main">

    <section class="uk-section --slide-one" id="Contents">
    <?php 

        $imgSlide1 = get_field( 'slide1_img' );
        $contentSlide1 = get_field( 'slide1_content' );

        ?>
        <div class="uk-container">
            <div class="uk-grid-small" uk-grid>
                <div class="uk-width-auto@m -handheld-phone">
                    <?php echo wp_get_attachment_image( $imgSlide1['id'], [ 390, 550, true ], '', [ 'class' => 'handheld-cp' ] ); ?>
                </div>
                <div class="uk-width-expand@m -content">
                    <div class="uk-panel">
                        
                        <figure>
                            <span>Advertise With</span>
                            <img src="<?php echo _uri.'/resources/images/advertise/sgg-social-logo.png'; ?>" alt="Sports Gambling Guides">
                        </figure>

                        <article>
                            <?php echo $contentSlide1; ?>
                        </article>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="uk-section uk-section-secondary --slide-two">
    <?php 

        $imgSlide2 = get_field( 'slide2_bg' );
        $contentSlide2 = get_field( 'slide2_content' );

        ?>        

            <div class="uk-child-width-1-2@m uk-grid-collapse" uk-grid>
                <article class="uk-article">
                    <?php echo $contentSlide2; ?>
                </article>                
                <figure>
                    <?php echo wp_get_attachment_image( $imgSlide2['id'], 'full' ); ?>
                </figure>                
            </div>
    </section>

    <section class="uk-section --slide-three">
        <div class="uk-container">
            
            <h2><?php the_field( 'slide3_heading' ); ?></h2>
            <div class="uk-child-width-1-3@m uk-flex-center uk-text-center" uk-grid>
            <?php while ( have_rows( 'slide3_multi_content' ) ) : the_row(); 

                $imgSlide3 = get_sub_field( 'slide_imacon' );

                ?>
                <div>
                    <figure class="uk-panel">
                        <?php echo wp_get_attachment_image( $imgSlide3['id'], 'full' ); ?>
                        <h3><?php the_sub_field( 'slide_title' ); ?></h3>
                        <p><?php the_sub_field( 'slide_content' ); ?></p>
                    </figure>
                </div>
                <?php endwhile; ?>
            </div>

        </div>
    </section>

    <section class="uk-section uk-section-secondary --slide-four">
        <div class="uk-container">

            <h2><?php the_field( 'slide4_heading' ); ?></h2>
            <div class="grid-wrapper">
            <?php $partners = get_field( 'slide4_customers' );
                foreach ( $partners as $partner ) : ?>
                <div>
                    <figure>
                        <?php echo wp_get_attachment_image( $partner['id'], 'full' ); ?>
                    </figure>
                </div>
                <?php endforeach; ?>
            </div>

        </div>
    </section>

    <section class="uk-section --slide-five">
        <div class="uk-container">

            <div uk-grid>
                <div class="uk-width-2-3@m">
                    <div class="uk-panel">
                        <h1><?php the_field( 'slide5_heading_pt1' ); ?></h1>
                        <p><?php the_field( 'slide5_subheading_pt1' ); ?></p>
                        <div class="chart-container">
                            <canvas id="myChart"></canvas>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-3@m">
                    <div class="uk-panel">
                        <h1><?php the_field( 'slide5_heading_pt2' ); ?></h1>

                        <?php while ( have_rows( 'slide5_multi_content' ) ) : the_row(); 

                            $imgMC = get_sub_field( 'slide_imacon' );
                            $titleMC = get_sub_field( 'slide_title' );
                            $contentMC = get_sub_field( 'slide_content' );

                            switch ( get_row_index() ) {
                                case '1':
                                    $href = '#modal-audience';
                                    break;

                                case '2':
                                    $href = '#modal-promotions';
                                    break;
                            }

                        ?>
                        <div class="uk-card uk-grid-collapse uk-flex-top" uk-grid>
                            <div class="uk-width-auto uk-card-media-left">
                                <?php echo wp_get_attachment_image( $imgMC['id'], 'full' ); ?>
                            </div>
                            <div class="uk-width-expand">
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title"><?php echo $titleMC; ?></h3>
                                    <p><?php echo $contentMC; ?> <a href="<?php echo $href; ?>" uk-toggle="">Learn More</a></p>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="uk-section --slide-six">
        <div class="uk-container">
            
            <article class="uk-article uk-text-center uk-width-xlarge">
                <?php the_field( 'slide6_content' ); ?>
            </article>

            <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-grid-small uk-grid-match uk-flex-center uk-flex-middle" uk-grid>
                <?php $instagram = get_field( 'slide6_instagram' );

                foreach ( $instagram as $ig ) : ?>
                <div>
                    <div class="uk-panel uk-text-center">
                        <?php echo wp_get_attachment_image( $ig['id'], 'full' ); ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

        </div>
    </section>

    <?php $imgS7 = get_field( 'slide7_bg' ); ?>
    <section class="uk-section uk-background-cover uk-background-center-left --slide-seven" data-src="<?php echo $imgS7['url'] ?>" uk-img>
        <div class="uk-container">

            <figure class="img-headings">
                <?php $s7Headings = get_field( 'slide7_img_heading' ); 
                echo wp_get_attachment_image( $s7Headings['id'], 'full' );  ?>
            </figure>

            <figure class="img-map">
                <?php $s7Map = get_field( 'slide7_img_map' ); 
                echo wp_get_attachment_image( $s7Map['id'], 'full' );  ?>

                <ul class="uk-subnav">
                    <?php while ( have_rows( 'slide7_maplegends' ) ) : the_row(); ?>
                    <li><span><?php the_sub_field( 'map_color_label' ); ?></span></li>
                    <?php endwhile; ?>
                </ul>
            </figure>

            <article class="uk-article">
                <?php the_field( 'slide7_content' ); ?>
            </article>

        </div>
    </section>

    <?php $imgS8 = get_field( 'slide8_bg' ); ?>
    <section class="uk-section uk-background-cover uk-background-center-center --slide-eight" data-src="<?php echo $imgS8['url'] ?>" uk-img>
        <div class="uk-container">

            <div class="uk-grid-small uk-child-width-1-2@s uk-child-width-1-3@m" uk-grid="masonry: true">
                <?php $slideNews = get_field( 'slide8_news' );
                foreach ( $slideNews as $news ) : ?>
                <div>
                    <figure class="uk-text-center"> <?php echo wp_get_attachment_image( $news['id'], 'full', '', [ 'class' => 'uk-box-shadow-large uk-border-rounded' ] ); ?> </figure>
                </div>
                <?php endforeach; ?>
            </div>

        </div>
    </section>

    <?php $imgS9 = get_field( 'slide9_bg' ); ?>
    <section class="uk-section uk-section-secondary uk-background-cover uk-background-center-center --slide-nine" data-src="<?php echo $imgS9['url'] ?>" uk-img>
        <div class="uk-container">
            
            <div class="uk-width-large">
                <?php the_field( 'slide9_content' ); ?>
            </div>

        </div>
    </section>

    <?php $imgRouter = get_field( 'slide10_bg' ); ?>
    <section class="uk-section uk-height-medium uk-background-cover uk-background-center-center --router" data-src="<?php echo $imgRouter['url'] ?>" uk-img>
        <div class="uk-container uk-text-center">

            <h1><?php the_field( 'slide10_heading' ); ?></h1>
            <a href="<?php the_field( 'slide10_link' ); ?>" class="uk-button uk-button-large uk-button-primary">Contact Us</a>

        </div>
    </section>
</main>

<!-- Modals -->
<div id="modal-audience" class="uk-flex-top" uk-modal>
    <div class="uk-modal-dialog uk-width-auto uk-margin-auto-vertical">
        <button class="uk-modal-close-outside" type="button" uk-close></button>
        <img src="<?php echo _uri.'/resources/images/advertise/img-influencers-pt1.png'; ?>" alt="Influencers">
        <img src="<?php echo _uri.'/resources/images/advertise/img-influencers-pt2.png'; ?>" alt="Influencers">
    </div>
</div>

<div id="modal-promotions" class="uk-flex-top" uk-modal>
    <div class="uk-modal-dialog uk-width-auto uk-margin-auto-vertical uk-text-center" style="background-color:#000;">
        <button class="uk-modal-close-outside" type="button" uk-close></button>
        <img src="<?php echo _uri.'/resources/images/advertise/full-stack-promotions.jpg'; ?>" alt="Promotions - Full">
        <img src="<?php echo _uri.'/resources/images/advertise/full-stack-impressions.jpg'; ?>" alt="Impressions - Full">
    </div>
</div>

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
            { x: 'SGG Instagram Influencers (Followers)', y:1.08, },
            { x: 'SGG Twitter Influencers (Followers)', y:1.05, }
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