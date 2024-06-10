<div id="solution" class="category">
    <?php if ($category['pid']) : ?>
        <?php require_once get_template_directory() . '/includes/breadcrumb.php'; ?>
    <?php endif; ?>
    <?php require_once 'includes/section-cover.php'; ?>

    <section class="section-content pt-5 pb-64">
        <div class="container">
            <div class="row mb-5">
                <div class="offset-md-2 col-md-8 text-center">
                    <h2 class="section-title mb-3"><?php echo $category['title_secondary']; ?></h2>
                    <p class="section-description mb-0"><?php echo $category['description_secondary']; ?></p>
                </div>
            </div>
            <?php $list_menu = ami_theme_get_list_menu_sidebar($category['id']); ?>
            <?php if (count($list_menu) > 0) : ?>

                <div class="list-menu row">
                    <?php for ($i = 0; $i < count($list_menu); $i++) : ?>
                        <div class="item col-md-4">
                            <a  <?php if($list_menu[$i]['layout'] != -1): ?>  href="<?php echo $list_menu[$i]['url']; ?>" <?php endif; ?> class="d-block mb-32">
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
</div>