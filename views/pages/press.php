<main id="main" class="main" role="main">
    
    <section id="Contents" class="uk-section | press-release">
        <div class="uk-container">
        <?php
            $logo = [ 'gaming-america', 'gambling-news', 'gambling-insider', 'yahoo-news', 'gambling-news', 'gambling-insider', 'yahoo-news', 'yahoo-news', 'yahoo-finance' ];
            $title = [
                'Sports Gambling Guides forms social media agreement with FanDuel',
                'FanDuel Teams up with Sports Gambling Guides to Boost Marketing',
                'Sports Gambling Guides agrees marketing partnership with FanDuel',
                'Astralis Capital Among Second Round Investors as Sports Gambling Guides Receives an Additional $2M in Funding',
                'Sports Gambling Guides Received $2M in Second Round Funding',
                'Sports Gambling Guides receives $2m in second round funding',
                'Modern Sports Bettors Use Social Media Exclusively Over All Other Media',
                'Sports Gambling Guides Declares Sports Betting Advertising Costs Must Come Back to Earth',
                'Sports Gambling Guides Announces Social Media Marketing Agreement with FanDuel'
            ];
            $links = [
                'https://gamingamerica.com/news/3552/sports-gambling-guides-forms-social-media-agreement-with-fanduel',
                'https://www.gamblingnews.com/news/fanduel-teams-up-with-sports-gambling-guides-to-boost-marketing/',
                'https://www.gamblinginsider.com/news/14480/sports-gambling-guides-agrees-marketing-partnership-with-fanduel',
                'https://www.yahoo.com/now/astralis-capital-among-second-round-112100476.html',
                'https://www.gamblingnews.com/news/sports-gambling-guides-received-2m-in-second-round-funding/',
                'https://www.gamblinginsider.com/news/16849/sports-gambling-guides-receives-2m-in-second-round-funding',
                'https://www.yahoo.com/now/modern-sports-bettors-social-media-134400091.html',
                'https://www.yahoo.com/now/sports-gambling-guides-declares-sports-134900010.html',
                'https://finance.yahoo.com/news/sports-gambling-guides-announces-social-133600302.html'
            ]; ?>
            <div uk-grid class="uk-grid-match uk-child-width-1-2@s uk-child-width-1-3@m uk-flex-center" uk-height-match="target: > div > .uk-card > .uk-card-body" uk-scrollspy="target: > div; cls: uk-animation-slide-bottom-medium; delay: 300">
                <?php for ( $n=0;$n<count($logo);$n++ ) : ?>
                <div>
                    <div class="uk-card uk-card-default uk-card-hover uk-card-small uk-text-center">
                        <div class="uk-card-media-top">
                            <img src="<?php echo _uri.'/resources/images/press/press-'.$logo[$n].'.jpg' ?>" alt="<?php echo $title[$n]; ?>">
                        </div>
                        <div class="uk-card-body">
                            <div class="uk-card-title"><?php echo $title[$n]; ?></div>
                        </div>
                        <div class="uk-card-footer">
                            <a href="<?php echo $links[$n]; ?>" target="_blank">Click here to Read</a>
                        </div>
                    </div>
                </div>
                <?php endfor; ?>
            </div>

        </div>
    </section>

    <?php include( locate_template( _frg.'colophon.php', false, true ) ); ?>

</main>