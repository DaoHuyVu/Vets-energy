<?php get_header(); ?>

<?php
if (is_category())
{
    $category_id = get_query_var('cat');
    $category = ami_theme_get_category_by_id($category_id);

    switch ($category['layout'])
    {
        case -1:
            require_once 'layout/category/404.php';
            break;
        case 1:
            require_once 'layout/category/solution.php';
            break;
        case 2:
            require_once 'layout/category/training.php';
            break;
        case 3:
            require_once 'layout/category/product.php';
            break;
        case 4:
            require_once 'layout/category/application.php';
            break;
        case 5:
            require_once 'layout/category/about-us.php';
            break;
        case 6:
            require_once 'layout/category/history.php';
            break;
        case 7:
            require_once 'layout/category/board-of-management.php';
            break;
        case 8:
        case 9:
        case 10:
            require_once 'layout/category/member.php';
            break;
        case 11:
            require_once 'layout/category/sustainable-development.php';
            break;
        case 12:
            require_once 'layout/category/news.php';
            break;
        case 13:
            require_once 'layout/category/tools.php';
            break;
        default:
            require_once 'layout/category/default.php';
            break;
    }
}

if (is_tag())
    require_once 'layout/category/tag.php';
?>

<?php get_footer(); ?>