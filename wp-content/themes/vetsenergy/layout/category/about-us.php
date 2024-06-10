<div id="about-us" class="category">
    <?php if ($category['pid']) : ?>
        <?php require_once get_template_directory() . '/includes/breadcrumb.php'; ?>
    <?php endif; ?>
    <?php require_once 'includes/section-cover.php'; ?>

    <section class="section-content pt-5 pb-64">
        <div class="container">
            <div class="row mb-5">
                <div class="offset-md-2 col-md-8 text-center">
                    <h2 class="section-title mb-3"><?php echo $category['title_secondary']; ?></h2>
                    <p class="section-description"><?php echo $category['description_secondary']; ?></p>
                </div>
            </div>
            <?php $list_menu = ami_theme_get_list_menu_sidebar($category['id']); ?>
            <?php if (count($list_menu) > 0) : ?>
                <div class="list-menu row">
                    <?php $count = count($list_menu) == 4 ? 3 : count($list_menu); ?>
                    <?php for ($i = 0; $i < $count; $i++) : ?>
                        <div class="item col-md-4">
                            <a <?php if($list_menu[$i]['layout'] != -1): ?>  href="<?php echo $list_menu[$i]['url']; ?>" <?php endif; ?> class="d-block mb-32">
                                <div class="image-wrapper image-3-2 position-relative">
                                    <div class="position-absolute image" style="background-image:url('<?php echo $list_menu[$i]['image']; ?>');"></div>
                                </div>
                            </a>
                            <h3 class="title text-uppercase mb-4">
                                <a <?php if($list_menu[$i]['layout'] != -1): ?>  href="<?php echo $list_menu[$i]['url']; ?>" <?php endif; ?> >
                                    <?php echo $list_menu[$i]['name']; ?>
                                </a>
                            </h3>
                            <div class="summary text-justify"><?php echo $list_menu[$i]['summary']; ?></div>
                        </div>
                    <?php endfor; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
    
    <?php if (count($list_menu) > 0 && (count($list_menu) - 1) % 3 == 0) : ?>
        <?php $count = count($list_menu) - 1; ?>
        <section class="section-cover page-cover text-white">
            <div class="container-fluid px-0">
                <div class="position-relative">
                    <div class="image-wrapper position-relative">
                        <div class="position-absolute image" style="background-image:url('<?php echo $list_menu[$count]['cover']; ?>');"></div>
                    </div>
                    <div class="container position-absolute">
                        <div class="main-info">
                            <p class="title mb-3"><?php echo $list_menu[$count]['name']; ?></p>
                            <div class="summary  mb-3"><?php echo $list_menu[$count]['summary']; ?></div>
                            <a href="<?php echo $list_menu[$count]['url']; ?>" class="btn btn-primary text-uppercase"><?php echo __('Xem thêm', 'vetsenergy'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php else : ?>
        <?php if ($category['cover_secondary']) : ?>
            <?php $image_id = attachment_url_to_postid($category['cover_secondary']); ?>
            <?php 
			
$image = wp_prepare_attachment_for_js($image_id); 

?>
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
    <?php endif; ?>

    <section class="section-4 py-64">
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