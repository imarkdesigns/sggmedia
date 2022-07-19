<main id="main" class="main" role="main">
    <div class="uk-container uk-container-xlarge">
        <div class="uk-grid-small" uk-grid>
            <div class="uk-width-expand@l">
                <div class="uk-card uk-card-default uk-card-body" data-card="content">
                    <h1 class="uk-card-title"><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                </div>
            </div>
            <div class="uk-width-1-1 uk-width-large@l">
                <?php // get_sidebar(); ?>
            </div>
        </div>
    </div>
</main>