<div id="history" class="category">
    <?php require_once get_template_directory() . '/includes/breadcrumb.php'; ?>
    <?php require_once 'includes/section-cover.php'; ?>

    <section class="section-2 py-5">
        <div class="container">
            <?php if (have_posts()) : ?>
                <?php $count = 0; ?>
                <div class="list-item">
                    <?php while (have_posts()) : ?>
                        <?php the_post(); ?>
                        <?php $count++; ?>

                        <?php $summary = get_post_meta(get_the_ID(), 'summary', true); ?>
                        <?php $summary = str_replace("\n", '</p><p>', '<p>' . $summary . '</p>'); ?>
                        <?php $page_template = get_post_meta( get_the_ID(), '_wp_page_template', true ); ?>
                        <div class="item <?php echo $count < $wp_query->found_posts ? 'mb-5' : ''; ?>">
                            <div class="row d-flex flex-column-reverse flex-md-row">
                                <div class="col-md-6 d-flex justify-content-start pr-md-5">
                                    <div class="main-info">
                                        <h3 class="title h5 mb-4">
                                            <?php echo get_the_title(); ?>
                                        </h3>
                                        <div class="summary mb-0 text-justify"><?php echo $summary; ?></div>
                                    </div>
                                </div>
                                <div class="col-md-6 d-md-flex justify-content-sm-center mb-32 mb-md-0">
                                    <div class="w-100">
                                        <div class="image-wrapper image-16-9 position-relative">
                                            <div class="position-absolute image" style="background-image:url('<?php echo ami_theme_get_image('large'); ?>');"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
                <?php echo ami_theme_get_pagination(); ?>
            <?php endif; ?>
        </div>
    </section>
</div>