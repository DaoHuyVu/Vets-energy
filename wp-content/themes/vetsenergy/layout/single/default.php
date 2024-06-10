<div id="news-detail" class="single">
    <?php require_once get_template_directory() . '/includes/breadcrumb.php'; ?>

    <div class="container">
        <div class="clearfix pb-5">
            <div class="main-content mb-64 mb-md-0">
                <article id="post-<?php echo get_the_ID(); ?>">
                    <?php $summary = get_post_meta(get_the_ID(), 'summary', true); ?>
                    <header class="entry-header mb-4">
                        <!--<div class="image-featured mb-4 hidden-on-print">
                            <div class="image-wrapper position-relative">
                                <div class="position-absolute image" style="background-image:url('<?php echo ami_theme_get_image('full'); ?>');"></div>
                            </div>
                        </div>-->
                        <h1 class="page-title h2 mb-4"><?php echo get_the_title(); ?></h1>
                        <?php if ($summary) : ?>
                            <div class="summary font-italic mb-3"><?php echo $summary; ?></div>
                        <?php endif; ?>
                        <div class="clearfix">
                            <div class="publish-date mb-3 mb-sm-0">
                                <p class="mb-0"><i class="far fa-clock"></i> <?php echo get_the_date(); ?></p>
                            </div>
                            <div class="social hidden-on-print">
                                <a href="javascript:void(0)" class="item btn-social-print d-inline-block" rel="nofollow" title="<?php echo __('In tin bài', 'vetsenergy'); ?>" onclick="window.print();">
                                    <div class="btn-social print d-inline-block rounded-circle text-center text-white">
                                        <i class="fas fa-print"></i>
                                    </div>
                                </a>
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
                        </div>
                    </header>
                    <section class="entry-content mb-3">
                        <?php the_content(); ?>
                    </section>
                </article>
                <?php
                    list($image_width, $image_height) =  ami_theme_get_site_image('large');
                    $timezone_offset  = get_option('gmt_offset');
                    $hours = (int) $timezone_offset;
                    $minutes = ($timezone_offset - floor($timezone_offset)) * 60;
                    $timezone_offset = sprintf('%+03d:%02d', $hours, $minutes);
                ?>
                <script type="application/ld+json">
                    {
                        "@context": "http://schema.org",
                        "@type": "NewsArticle",
                        "mainEntityOfPage": "<?php echo get_the_permalink(); ?>",
                        "description": "<?php echo $summary ? $summary : ami_theme_get_excerpt(120) ; ?>",
                        "headline": "<?php echo get_the_title(); ?>",
                        "image": {
                            "@type": "ImageObject",
                            "url": "<?php echo ami_theme_get_image('large'); ?>",
                            "width": <?php echo $image_width; ?>,
                            "height": <?php echo $image_height; ?>
                        },
                        "datePublished": "<?php echo get_the_date('Y-m-d') . 'T' . get_the_date('H:i:s') . $timezone_offset; ?>",
                        "dateModified": "<?php echo get_the_modified_date('Y-m-d') . 'T' . get_the_modified_date('H:i:s') . $timezone_offset; ?>",
                        "publisher": {
                            "@type": "Organization",
                            "name": "<?php echo get_bloginfo(); ?>",
                            "logo": {
                                "@type": "ImageObject",
                                "url": "<?php echo get_template_directory_uri() . '/images/logo-google-snippet.png'; ?>",
                                "width": 180,
                                "height": 60
                            }
                        },
                        "author": {
                            "@type": "Person",
                            "name": "<?php echo get_the_author(); ?>"
                        }
                    }
                </script>
            </div>

            <div class="sidebar">
                <div class="widget widget-article">
                    <div class="widgettitle"><?php echo __('Tin liên quan', 'vetsenergy'); ?></div>
                    <div class="widgetcontent">
                        <?php
                        $category = get_the_category($post->ID);
                        $args = array
                        (
                            'cat' => $category[0]->term_id,
                            'category__in' => array($category[0]->term_id),
                            'post__not_in' => array($post->ID),
                            'posts_per_page' => 3,
                            'order'   => 'DESC',
                        );
                        $related_posts = new WP_Query($args);
                        ?>
                        <?php if ($related_posts->have_posts()) : ?>
                            <div class="list-item">
                                <?php while ($related_posts->have_posts()) : ?>
                                    <?php $related_posts->the_post(); ?>
                                    <div class="item">
                                        <a href="<?php echo get_the_permalink(); ?>" class="d-block mb-3">
                                            <div class="image-wrapper image-3-2 position-relative">
                                                <div class="position-absolute image" style="background-image:url('<?php echo ami_theme_get_image('medium'); ?>');"></div>
                                            </div>
                                        </a>
                                        <h3 class="title"><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>