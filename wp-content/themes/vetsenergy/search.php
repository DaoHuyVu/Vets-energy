<?php
global $wp_query;
function wpdocs_excerpt_more( $more ) {
    return ' ...';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

function wpdocs_custom_excerpt_length( $length ) {
    return 100;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );
?>

<?php get_header(); ?>

<div id="search">
    <div class="container pt-5">
        <h1 class="page-title font-weight-lighter mb-32 mb-sm-5"><?php echo __('Tìm kiếm', 'vetsenergy'); ?></h1>
    </div>
    <div class="container-fluid text-white px-0">
        <div class="row">
            <form class="col-md-12 col-12">
                <div class="full-width pt-4 pb-4" style="background-color: #006282">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 input-group-search d-flex input-group">
                                <input name="s" id="txtKeyword" class="form-control body1" value="<?php echo get_search_query() ?>" placeholder="Nhập từ khóa tìm kiếm" autocomplete="off">
                                <button type="submit" id="btnSearch" class="">
                                    <i class="far fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="container pt-5 pb-5">
        <div class="row">
            <?php if (have_posts()): ?>
                <div class="col-12">
                    <div class="search-pagination-wrap d-block">
                        <div class="select-wrap remove-mobile-float body2 mb-3">
                            <str class="font-weight-bold"><?php echo $wp_query->found_posts; ?></str> <span><?php echo __('kết quả được tìm thấy', 'vetsenergy'); ?></span>
                        </div>
                    </div>
                    <div id="list-article">
                    <?php while  (have_posts()):?>
                        <?php
                        the_post();
                        get_template_part( 'template-parts/content/content-excerpt', get_post_format() );
                        ?>
                    <?php endwhile; ?>
                    </div>
                    <?php echo ami_theme_get_pagination(); ?>
                </div>
            <?php else: ?>
                <div class="col-12">
                    <span><?php echo __('Không tìm thấy kết quả phù hợp', 'vetsenergy'); ?></span>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
