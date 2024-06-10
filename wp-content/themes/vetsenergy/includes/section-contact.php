<?php $page_id = pll_get_post(66); ?>
<?php $page = get_page($page_id); ?>
<?php if ($page) : ?>
    <section class="section-contact">
        <div class="container-fluid px-0 py-5 text-center">
            <h2 class="section-title mb-3"><?php echo __('Liên hệ với chúng tôi', 'vetsenergy'); ?></h2>
            <p class="section-description"><?php echo __('Để tìm hiểu thêm về các sản phẩm của chúng tôi và các ưu đãi đặc biệt', 'vetsenergy'); ?></p>
            <a href="<?php echo get_page_link($page->ID); ?>" class="btn btn-primary text-uppercase"><?php echo __('Liên hệ', 'vetsenergy'); ?></a>
        </div>
    </section>
<?php endif; ?>