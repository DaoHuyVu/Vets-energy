<div id="tags" class="category">
    <div class="container">
        <h1 class="page-title font-weight-lighter my-4"><?php echo single_cat_title('', false); ?></h1>
        <?php if (have_posts()) : ?>
            <div class="list-news row mb-2">
                <?php while (have_posts()) : ?>
                <?php the_post(); ?>
                    <div class="item col-6 col-lg-4">
                        <a href="<?php echo get_the_permalink(); ?>" class="d-block mb-2 mb-sm-3">
                            <div class="image-wrapper image-3-2 position-relative">
                                <div class="position-absolute image" style="background-image:url('<?php echo ami_theme_get_image('medium'); ?>');"></div>
                            </div>
                        </a>
                        <h2 class="title mb-3"><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
                        <?php include 'includes/social.php'; ?>
                    </div>
                <?php endwhile; ?>
            </div>
            <?php echo ami_theme_get_pagination(); ?>
        <?php endif; ?>
    </div>
</div>