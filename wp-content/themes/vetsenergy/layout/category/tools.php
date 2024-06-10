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

            <?php
            $args = array(
                'post_type'=> 'ami_post_tool',
                'cat'    => $category["id"],
            );

            $the_query = new WP_Query( $args );

            ?>
            <?php if ($the_query->have_posts()) : ?>
                <div class="list-menu row <?php echo paginate_links() ? 'mb-5' : ''; ?>">
                    <?php while ( $the_query->have_posts()) : ?>
                        <?php $the_query->the_post(); ?>
                        <?php  $link = get_post_meta(get_the_ID(), '_link_tool', true); ?>
                        <div class="item col-md-4">
                            <a class="d-block mb-32">
                                <div class="image-wrapper image-3-2 position-relative">
                                    <div class="position-absolute image" style="background-image:url('<?php echo ami_theme_get_image('medium'); ?>');"></div>
                                </div>
                            </a>
                            <h3 class="title text-uppercase mb-4">
                                <?php echo get_the_title(); ?>
                            </h3>
                            <div class="summary text-justify"><?php echo ami_theme_get_excerpt(135); ?></div>
                            <div class="tool mt-4">
                                <a class="btn btn-sm text-white" style="background: #006282;" href="<?php echo esc_url($link)?>" target="_blank" rel="nofollow">
									<i class="fas fa-download"></i> <?php echo __('Tải xuống', 'vetsenergy'); ?></a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
                <?php echo ami_theme_get_pagination(); ?>
            <?php endif; ?>
        </div>
    </section>
    <section class="section-2 py-64">
        <div class="container">
            <div class="row">
                <div class="offset-md-2 col-md-8 text-center">
                    <h2 class="mb-3"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-blue.png" alt="<?php echo __('Vets Energy', 'vetsenergy'); ?>" /></h2>
                    <p class="section-title mb-0"><?php echo __('Chúng tôi mong muốn tạo ra sự khác biệt mang tính tích cực trên thế giới.', 'vetsenergy'); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>