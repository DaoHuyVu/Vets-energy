<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : ?>
        <?php
        the_post();

        $category_id = get_the_category(get_the_ID())[0]->cat_ID;
        $category_id = pll_get_term($category_id);
        $category = ami_theme_get_category_by_id($category_id);
        switch ($category['layout'])
        {
            case 7:
                require_once 'layout/single/board-of-management.php';
                break;
            default:
                require_once 'layout/single/default.php';
                break;
        }
        ?>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>