<div id="board-of-management" class="category">
    <?php require_once get_template_directory() . '/includes/breadcrumb.php'; ?>

    <section class="section-1 pb-3">
        <div class="container">
            <h1 class="page-title font-weight-lighter"><?php echo $category['name']; ?></h1>
        </div>
    </section>

    <section class="section-content pt-3 pb-5">
        <div class="container">
            <?php if (have_posts()) : ?>
                <div class="list-person row <?php echo paginate_links() ? 'mb-2' : ''; ?>">
                    <?php while (have_posts()) : ?>
                        <?php the_post(); ?>

                        <?php $summary = get_post_meta(get_the_ID(), 'summary', true); ?>

                        <div class="item col-md-6 col-lg-4">
                            <a href="<?php echo get_the_permalink(); ?>" class="d-block mb-32">
                                <div class="image-wrapper image-3-2 position-relative">
                                    <div class="position-absolute image" style="background-image:url('<?php echo ami_theme_get_image('large'); ?>');"></div>
                                </div>
                            </a>
                            <h2 class="title text-uppercase mb-3"><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
                            <p class="summary font-weight-light"><?php echo $summary; ?></p>
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
            <section class="section-cover page-cover text-white">
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

    <?php require_once get_template_directory() . '/includes/section-contact.php'; ?>
</div>