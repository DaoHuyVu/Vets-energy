<div class="social d-none d-sm-block">
    <a href="https://www.facebook.com/sharer.php?u=<?php echo get_the_permalink(); ?>" target="_blank" class="item d-inline-block" rel="nofollow">
        <div class="btn-social facebook d-inline-block rounded-circle text-center text-white">
            <i class="fab fa-facebook-f"></i>
        </div>
    </a>
    <a href="https://twitter.com/intent/tweet?text=<?php echo get_the_title(); ?>&amp;via=<?php echo get_bloginfo(); ?>&amp;url=<?php echo get_the_permalink(); ?>" target="_blank" class="item d-inline-block" rel="nofollow">
        <div class="btn-social twitter d-inline-block rounded-circle text-center text-white">
            <i class="fab fa-twitter"></i>
        </div>
    </a>
    <a href="mailto:?subject=<?php echo get_the_title(); ?>&amp;body=<?php echo get_the_permalink(); ?>" class="item d-inline-block" rel="nofollow" title="<?php echo __('Gửi tin bài qua email', 'vetsenergy'); ?>">
        <div class="btn-social email d-inline-block rounded-circle text-center text-white">
            <i class="far fa-envelope"></i>
        </div>
    </a>
</div>