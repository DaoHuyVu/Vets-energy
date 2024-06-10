<?php
/**
 * ReduxTemplates - Full Width / Stretched
 *
 * @since   4.0.0
 * @package redux-framework
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<?php get_header(); ?>

    <div id="page-error">
        <div class="container">
            <div class="page-content d-flex justify-content-center align-items-center">
                <p class="text-center text-danger mb-0"><i class="fas fa-exclamation-triangle"></i> <?php echo __('404, Không tìm thấy đường dẫn này', 'vetsenergy'); ?></p>
            </div>
        </div>
    </div>

<?php get_footer(); ?>