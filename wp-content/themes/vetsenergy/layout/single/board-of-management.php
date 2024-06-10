<div id="board-of-management-detail" class="single">
    <?php require_once get_template_directory() . '/includes/breadcrumb.php'; ?>

    <div class="container pb-64">
        <div class="row d-flex flex-column-reverse flex-md-row py-4">
            <div class="col-md-6 d-flex justify-content-start pr-md-5">
                <div class="main-info">
                    <div class="entry-header mb-4">
                        <h1 class="page-title mb-0"><?php echo get_the_title(); ?></h1>
                    </div>
                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-md-flex justify-content-sm-center mb-4 mb-md-0">
                <div class="w-100">
                    <div class="image-wrapper position-relative">
                        <div class="position-absolute image" style="background-image:url('<?php echo ami_theme_get_image('large'); ?>');"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>