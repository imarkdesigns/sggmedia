<footer data-globals="footer">
    <section class="footer">
        <div class="uk-container">
            <div uk-grid class="uk-flex-between uk-flex-middle uk-light">

                <div class="uk-width-1-1 uk-width-auto@s">
                    <div class="uk-panel">
                        <?php echo '&copy; '. date('Y') .' '. get_bloginfo() .'. All Rights Reserved.'; ?>
                    </div>
                </div>

                <div class="uk-width-1-1 uk-width-auto@s">
                    <div class="uk-flex uk-flex-middle">
                        <ul class="uk-subnav uk-subnav-divider uk-margin-remove">
                            <li><a href="<?php echo __( get_permalink( 3 ) ); ?>">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
</footer>