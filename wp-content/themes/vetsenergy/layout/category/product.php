<div id="product" class="category">
    <?php require_once get_template_directory() . '/includes/breadcrumb.php'; ?>
    <?php require_once 'includes/section-cover.php'; ?>
    
    <section class="section-content pt-5 pb-64">
        <div class="container">
            <div class="row mb-5">
                <div class="offset-md-2 col-md-8 text-center">
                    <h2 class="section-title mb-3"><?php echo $category['title_secondary']; ?></h2>
                    <p class="section-description mb-0"><?php echo $category['description_secondary']; ?></p>
                </div>
            </div>
            <?php if (have_posts()) : ?>
                <?php $count = 0; ?>
                <div class="list-menu row <?php echo paginate_links() ? 'mb-5' : ''; ?>">
                    <?php while (have_posts()) : ?>
                        <?php the_post(); ?>

                        <?php $count++; ?>
                        <?php $summary = get_post_meta(get_the_ID(), 'summary', true); ?>

                        <div class="item col-md-4">
                            <a href="<?php echo get_the_permalink(); ?>" class="d-block mb-32">
                                <div class="image-wrapper image-3-2 position-relative">
                                    <div class="position-absolute image" style="background-image:url('<?php echo ami_theme_get_image('medium'); ?>');"></div>
                                </div>
                            </a>
                            <h3 class="title text-uppercase mb-4"><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
                            <div class="summary text-justify"><?php echo $summary ? $summary : ami_theme_get_excerpt(135); ?></div>
                        </div>
                    <?php endwhile; ?>
                </div>
                <?php echo ami_theme_get_pagination(); ?>
            <?php endif; ?>
        </div>
    </section>

    <?php if ($category['cover_secondary']) : ?>
        <?php $image_id = attachment_url_to_postid($category['cover_secondary']); ?>
        <?php $image = wp_prepare_attachment_for_js($image_id); ?>
        <?php if ($image) : ?>
            <section class="section-cover page-cover text-white pb-64">
                <div class="container-fluid px-0">
                    <div class="position-relative">
                        <div class="image-wrapper position-relative">
                            <div class="position-absolute image" style="background-image:url('<?php echo $image['url']; ?>');"></div>
                        </div>
                        <div class="container position-absolute">
                            <div class="main-info">
                                <p class="title mb-3"><?php echo $image['caption']; ?></p>
                                <p class="summary <?php echo $image['alt'] ? 'mb-3' : 'mb-0'; ?>"><?php echo $image['description']; ?></p>
                                <?php if ($image['alt']) : ?>
                                    <a href="<?php echo $image['alt']; ?>" class="btn btn-primary text-uppercase"><?php echo __('Tìm hiểu', 'vetsenergy'); ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>
    <?php endif; ?>
</div>