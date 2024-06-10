<div id="application" class="category">
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
                        <?php
                        if ($list_menu[$i]['object'] == 'category')
                            $list_menu[$i]['post_count'] = get_category($list_menu[$i]['id'])->category_count;
                        ?>
                        <?php $list_submenu = ami_theme_get_list_menu_sidebar($list_menu[$i]['id']);  ?>
                        <div class="item col-md-4">
                            <a href="<?php echo $list_menu[$i]['url']; ?>" class="d-block mb-32">
                                <div class="image-wrapper image-3-2 position-relative">
                                    <div class="position-absolute image" style="background-image:url('<?php echo $list_menu[$i]['image']; ?>');"></div>
                                </div>
                            </a>
                            <h3 class="title text-uppercase mb-4">
                                <a href="<?php echo $list_menu[$i]['url']; ?>">
                                    <?php echo $list_menu[$i]['name']; ?><?php echo array_key_exists('post_count', $list_menu[$i]) ? ' (' . $list_menu[$i]['post_count'] . ')' : ''; ?>
                                </a>
                            </h3>
                            <div class="summary <?php echo (count($list_submenu) > 0) ? 'mb-4' : ''; ?>"><?php echo $list_menu[$i]['summary']; ?></div>
                            <?php if (count($list_submenu) > 0) : ?>
                                <ul class="list-article list-unstyled mb-0">
                                    <?php for ($j = 0; $j < count($list_submenu); $j++) : ?>
                                        <li class="item">
                                            <h4 class="article-title <?php echo $j < count($list_submenu) - 1 ? 'mb-1' : ''; ?> h6 font-weight-normal">
                                                <a href="<?php echo $list_submenu[$j]['url']; ?>"><?php echo $list_submenu[$j]['name']; ?></a>
                                            </h4>
                                        </li>
                                    <?php endfor; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                    <?php endfor; ?>
                </div>
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
                            <div class="position-absolute image"
                                 style="background-image:url('<?php echo $image['url']; ?>');"></div>
                        </div>
                        <div class="container position-absolute">
                            <div class="main-info">
                                <p class="title mb-3"><?php echo $image['caption']; ?></p>
                                <p class="summary <?php echo $image['alt'] ? 'mb-3' : 'mb-0'; ?>"><?php echo $image['description']; ?></p>
                                <?php if ($image['alt']) : ?>
                                    <a href="<?php echo $image['alt']; ?>"
                                       class="btn btn-primary text-uppercase"><?php echo __('Tìm hiểu', 'vetsenergy'); ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>
    <?php endif; ?>
</div>