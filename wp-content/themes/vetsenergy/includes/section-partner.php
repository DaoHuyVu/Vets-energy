<?php $list_partner = ami_theme_get_config('partner'); ?>
<?php $list_partner = @explode(',', $list_partner); ?>
<?php if ($list_partner[0] != '') : ?>
    <section class="section-partner">
        <div class="container">
            <div class="list-item row">
                <?php for ($i = 0; $i < count($list_partner); $i++) : ?>
                    <?php $image = wp_prepare_attachment_for_js($list_partner[$i]); ?>
                    <?php $image['url'] = wp_get_attachment_image_src($list_partner[$i], 'full')[0]; ?>
                    <div class="item col-4 col-md-4 col-lg-2 mb-4 mb-lg-0">
                        <?php if ($image['caption']) : ?>
                            <a href="<?php echo $image['caption']; ?>" target="_blank" rel="nofollow" class="d-block">
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>" class="img-fluid" />
                            </a>
                        <?php else : ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>" class="img-fluid" />
                        <?php endif; ?>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>
<?php endif; ?>