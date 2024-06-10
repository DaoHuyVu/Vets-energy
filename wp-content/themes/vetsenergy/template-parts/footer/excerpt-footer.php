<?php foreach((get_the_category()) as $category):?>
    <a href=" <?php echo esc_url( get_category_link( $category->term_id ) ); ?>" class="tags-col d-inline-block">
        <small class="search-tags label2 mb-2 mr-2">
            <?php echo esc_html( $category->name ); ?>
        </small>
    </a>
<?php endforeach; ?>
