<div id="member" class="category">
    <?php require_once get_template_directory() . '/includes/breadcrumb.php'; ?>

    <section class="section-1 pb-3">
        <div class="container">
            <h1 class="page-title font-weight-lighter"><?php echo $category['name']; ?></h1>
        </div>
    </section>

    <?php
    switch ($category['layout'])
    {
        case 8:
            $partner_config = 'partner';
            break;
        case 9:
            $partner_config = 'partner-2';
            break;
        case 10:
            $partner_config = 'partner-3';
            break;
    }
    ?>

    <section class="section-content pt-3 pb-5">
        <div class="container">
            <?php $list_partner = ami_theme_get_config($partner_config); ?>
            <?php $list_partner = @explode(',', $list_partner); ?>
            <?php if ($list_partner[0] != '') : ?>
                <div class="list-person row">
                    <?php for ($i = 0; $i < count($list_partner); $i++) : ?>
                        <?php $image = wp_prepare_attachment_for_js($list_partner[$i]); ?>
                        <?php $image['url'] = wp_get_attachment_image_src($list_partner[$i], 'full')[0]; ?>

                        <div class="item col-6 col-lg-4">
                            <?php if ($image['caption']) : ?>
                                <a href="<?php echo $image['caption']; ?>" class="d-block mb-2 mb-sm-4" target="_blank" rel="nofollow">
                                    <div class="image-wrapper image-3-2 position-relative">
                                        <div class="position-absolute image" style="background-image:url('<?php echo $image['url']; ?>');"></div>
                                    </div>
                                </a>
                                <h2 class="title text-center"><a href="<?php echo $image['caption']; ?>" target="_blank" rel="nofollow"><?php echo $image['title']; ?></a></h2>
                            <?php else : ?>
                                <div class="image-wrapper image-3-2 position-relative mb-2 mb-sm-4">
                                    <div class="position-absolute image" style="background-image:url('<?php echo $image['url']; ?>');"></div>
                                </div>
                                <h2 class="title text-center"><?php echo $image['title']; ?></h2>
                            <?php endif; ?>
                        </div>
                    <?php endfor; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
</div>