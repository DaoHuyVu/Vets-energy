<div id="news" class="category">
    <div class="container py-32 py-sm-5">
        <h1 class="page-title font-weight-lighter mb-32 mb-sm-5"><?php echo $category['name']; ?></h1>
        <?php if (have_posts()) : ?>
            <?php $count = 0; ?>
            <?php while (have_posts()) : ?>
                <?php the_post(); ?>
                <?php $count++; ?>
                
                <?php if ($count == 1) : ?>
                    <div class="item-news-featured row mb-64">
                        <div class="col-lg-6 mb-3 mb-lg-0">
                            <a href="<?php echo get_the_permalink(); ?>" class="d-block">
                                <div class="image-wrapper image-3-2 position-relative">
                                    <div class="position-absolute image" style="background-image:url('<?php echo ami_theme_get_image('large'); ?>');"></div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6">
                            <?php $list_tag = get_the_tags(); ?>
                            <?php if ($list_tag && count($list_tag) > 0) : ?>
                                <div class="list-tag mb-2 mb-lg-3 text-uppercase">
                                    <?php for ($i = 0; $i < count($list_tag); $i++) : ?>
                                        <p class="item d-inline-block mb-0"><a href="<?php echo get_tag_link($list_tag[$i]->term_id); ?>"><?php echo $list_tag[$i]->name; ?></a><?php echo $i < count($list_tag) - 1 ? '<span class="mx-1">•</span>' : ''; ?></p>
                                    <?php endfor; ?>
                                </div>
                            <?php endif; ?>
                            <h2 class="title mb-3 mb-lg-4"><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
                            <a href="<?php echo get_the_permalink(); ?>" class="btn-read-more d-inline-block mb-2 text-uppercase">Xem thêm <i class="fal fa-long-arrow-right"></i></a>
                            <?php include 'includes/social.php'; ?>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if ($count > 1) : ?>
                    <?php if ($count == 2) : ?>
                        <div class="list-news row mb-2">
                    <?php endif; ?>

                    <div class="item col-6 col-lg-4">
                        <a href="<?php echo get_the_permalink(); ?>" class="d-block mb-4">
                            <div class="image-wrapper image-3-2 position-relative">
                                <div class="position-absolute image" style="background-image:url('<?php echo ami_theme_get_image('medium'); ?>');"></div>
                            </div>
                        </a>
                        <?php $list_tag = get_the_tags(); ?>
                        <?php if ($list_tag && count($list_tag) > 0) : ?>
                            <div class="list-tag mb-2 text-uppercase">
                                <?php for ($i = 0; $i < count($list_tag); $i++) : ?>
                                    <p class="item d-inline-block mb-0"><a href="<?php echo get_tag_link($list_tag[$i]->term_id); ?>"><?php echo $list_tag[$i]->name; ?></a><?php echo $i < count($list_tag) - 1 ? '<span class="mx-1">•</span>' : ''; ?></p>
                                <?php endfor; ?>
                            </div>
                        <?php endif; ?>
                        <h2 class="title mb-3"><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
                        <?php include 'includes/social.php'; ?>
                    </div>

                    <?php if ($count == $wp_query->post_count) : ?>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
            <?php endwhile; ?>
            <?php echo ami_theme_get_pagination(); ?>
        <?php endif; ?>
    </div>
</div>