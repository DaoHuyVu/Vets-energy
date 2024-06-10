
<article class="mb-5" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="search-result-wrap d-flex">
        <div class="search-result-left">
            <?php get_template_part( 'template-parts/thumbnail/excerpt-thumbnail', get_post_format() ); ?>
        </div>
        <div class="search-result-center">
            <?php get_template_part( 'template-parts/header/excerpt-header', get_post_format() ); ?>
            <?php get_template_part( 'template-parts/excerpt/excerpt', get_post_format() ); ?>
            <?php get_template_part( 'template-parts/footer/excerpt-footer', get_post_format() ); ?>
        </div>
    </div>
</article>
