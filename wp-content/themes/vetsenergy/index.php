<?php $sticky_post = get_option('sticky_posts'); ?>

<?php get_header(); ?>

    <div id="home">
		<?php $image = ami_theme_get_config('cover-1'); ?>
		<?php if ($image && $image['id']) : ?>
			<?php $image = wp_prepare_attachment_for_js($image['id']); ?>
            <section class="section-1 page-cover page-center text-white">
                <div class="container-fluid px-0">
                    <div class="position-relative">
                        <div class="image-wrapper position-relative">
                            <div class="position-absolute image" style="background-image:url('<?php echo $image['url']; ?>');"></div>
                        </div>
                        <div class="container position-absolute">
                            <div class="main-info mx-auto text-center">
                                <p class="title mb-3"><?php echo $image['caption']; ?></p>
                                <p class="summary mb-0"><?php echo $image['description']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
		<?php endif; ?>

		<?php $category_id = pll_get_term(115); ?>
		<?php $category = ami_theme_get_category_by_id($category_id); ?>
		<?php if ($category) : ?>
            <section class="section-2 py-5">
                <div class="container">
                    <div class="section-header text-center">
                        <h2 class="mb-3"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-blue.png" alt="<?php echo __('Vets Energy', 'vetsenergy'); ?>" /></h2>
                    </div>
                    <div class="article text-center">
                        <h3 class="title h1 mb-4"><a href="<?php echo $category['url']; ?>"><?php echo __('Hiểu thêm về chúng tôi', 'vetsenergy'); ?></a></h3>
                        <a href="<?php echo $category['url']; ?>" class="btn btn-primary text-uppercase"><?php echo __('Tìm hiểu', 'vetsenergy'); ?></a>
                    </div>
                </div>
            </section>
		<?php endif; ?>


        <section class="section-3 py-5">
            <div class="container-fluid">

                <div class="list-category row mb-5">
                    <!-- Tư vấn-->
					<?php
					$category_id = pll_get_term(13);
					$category = ami_theme_get_category_by_id($category_id);
					$args = array
					(
						'posts_per_page' => 1,
						'cat' => $category_id,
						'post__in' => $sticky_post
					);
					$list_post = ami_theme_get_post($args);
					if ($category) : ?>
                        <div class="item article col-md-4">
                            <div class="category-wrapper position-relative">
                                <div class="main-info position-relative text-white">
                                    <div class="image-wrapper position-relative">
                                        <div class="position-absolute image" style="background-image:url('<?php echo $category['image_homepage']; ?>');"></div>
                                    </div>
                                    <p class="category position-absolute text-uppercase">
                                        <a href="<?php echo $category['url']; ?>" class="category-title d-flex align-items-center"><?php echo $category['name']; ?></a>
                                    </p>
                                    <a href="<?php echo $list_post[0]['url'] ?>" class="shadow d-block" rel="nofollow"></a>
                                </div>
                                <p class="title"><a href="<?php echo  $list_post[0]['url']; ?>" class="d-block"><?php echo $list_post[0]['title']; ?></a></p>
                            </div>
                        </div>
					<?php endif; ?>

					<!--Hợp tác-->
					<?php
					$category_id = pll_get_term(400);
					$category = ami_theme_get_category_by_id($category_id);
					$cate_tintuc_id = pll_get_term(400);
					$cate_tintuc = ami_theme_get_category_by_id($cate_tintuc_id);
					$args = array
					(
						'posts_per_page' => 1,
						'cat' => $cate_tintuc_id,
						'post__in' => $sticky_post
					);
					$list_post = ami_theme_get_post($args);
					if ($category) : ?>
                        <div class="item article col-md-4">
                            <div class="category-wrapper position-relative">
                                <div class="main-info position-relative text-white">
                                    <div class="image-wrapper position-relative">
                                        <div class="position-absolute image" style="background-image:url('<?php echo $category['image_homepage']; ?>');"></div>
                                    </div>
                                    <p class="category position-absolute text-uppercase">
                                        <a href="<?php echo $category['url']; ?>" class="category-title d-flex align-items-center"><?php echo $category['name']; ?></a>
                                    </p>
                                    <a href="<?php echo$cate_tintuc['url'] ?>" class="shadow d-block" rel="nofollow"></a>
                                </div>
                              <!-- <p class="title"><a href="<?php echo $cate_tintuc['url'];  ?>" class="d-block"><?php echo $list_post[0]['title']; ?></a></p> -->

							    <p class="title"><a href="<?php echo $cate_tintuc['url'];  ?>" class="d-block"><?php echo "Kiêm Kê Khí Nhà Kính"; ?></a></p>
                            </div>
                        </div>
					<?php endif; ?>

                    <!--Đào tạo-->
					<?php
					$category_id = pll_get_term(17);
					$category = ami_theme_get_category_by_id($category_id);
					$args = array
					(
						'posts_per_page' => 1,
						'cat' => $category_id,
						'post__in' => $sticky_post
					);
					$list_post = ami_theme_get_post($args);
					if ($category) : ?>
                        <div class="item article col-md-4">
                            <div class="category-wrapper position-relative">
                                <div class="main-info position-relative text-white">
                                    <div class="image-wrapper position-relative">
                                        <div class="position-absolute image" style="background-image:url('<?php echo $category['image_homepage']; ?>');"></div>
                                    </div>
                                    <p class="category position-absolute text-uppercase">
                                        <a href="<?php echo $category['url']; ?>" class="category-title d-flex align-items-center"><?php echo $category['name']; ?></a>
                                    </p>
                                    <a href="<?php echo $list_post[0]['url'] ?>" class="shadow d-block" rel="nofollow"></a>
                                </div>
                                <p class="title"><a href="<?php echo  $list_post[0]['url']; ?>" class="d-block"><?php echo $list_post[0]['title']; ?></a></p>
                            </div>
                        </div>
					<?php endif; ?>

                  


                    <!--Phát triển bền vững-->
					<?php
					$category_id = pll_get_term(23);
					$category = ami_theme_get_category_by_id($category_id);
					$cate_tintuc_id = pll_get_term(290);
					$cate_tintuc = ami_theme_get_category_by_id($cate_tintuc_id);
					$args = array
					(
						'posts_per_page' => 1,
						'cat' => $cate_tintuc_id,
						'post__in' => $sticky_post
					);
					$list_post = ami_theme_get_post($args);
					if ($category) : ?>
                        <div class="item article wide col-md-8">
                            <div class="category-wrapper position-relative">
                                <div class="main-info position-relative text-white">
                                    <div class="image-wrapper position-relative">
                                        <div class="position-absolute image" style="background-image:url('<?php echo $category['image_homepage']; ?>');"></div>
                                    </div>
                                    <p class="category position-absolute text-uppercase">
                                        <a href="<?php echo $category['url']; ?>" class="category-title d-flex align-items-center"><?php echo $category['name']; ?></a>
                                    </p>
                                    <a href="<?php echo$cate_tintuc['url'] ?>" class="shadow d-block" rel="nofollow"></a>
                                </div>
                                <p class="title"><a href="<?php echo $cate_tintuc['url'];  ?>" class="d-block"><?php echo $list_post[0]['title']; ?></a></p>
                            </div>
                        </div>
					<?php endif; ?>


                    <!--Sáng tạo-->
					<?php
					$category_id = pll_get_term(25);
					$category = ami_theme_get_category_by_id($category_id);
					$cate_tintuc_id = pll_get_term(152);
					$cate_tintuc = ami_theme_get_category_by_id($cate_tintuc_id);
					$args = array
					(
						'posts_per_page' => 1,
						'cat' => $cate_tintuc_id,
						'post__in' => $sticky_post
					);
					$list_post = ami_theme_get_post($args);
					if ($category) : ?>
                        <div class="item article col-md-4">
                            <div class="category-wrapper position-relative">
                                <div class="main-info position-relative text-white">
                                    <div class="image-wrapper position-relative">
                                        <div class="position-absolute image" style="background-image:url('<?php echo $category['image_homepage']; ?>');"></div>
                                    </div>
                                    <p class="category position-absolute text-uppercase">
                                        <a href="<?php echo $category['url']; ?>" class="category-title d-flex align-items-center"><?php echo $category['name']; ?></a>
                                    </p>
                                    <a href="<?php echo$cate_tintuc['url'] ?>" class="shadow d-block" rel="nofollow"></a>
                                </div>
                                <p class="title"><a href="<?php echo $cate_tintuc['url'];  ?>" class="d-block"><?php echo $list_post[0]['title']; ?></a></p>
                            </div>
                        </div>
					<?php endif; ?>
                </div>

				<?php $category_id = pll_get_term(42); ?>
				<?php $category = ami_theme_get_category_by_id($category_id); ?>
				<?php if ($category) : ?>
                    <div class="text-center">
                        <a href="<?php echo $category['url']; ?>" class="btn btn-primary text-uppercase"><?php echo __('Xem thêm', 'vetsenergy'); ?></a>
                    </div>
				<?php endif; ?>
            </div>
        </section>

		<?php $category_id = pll_get_term(46); ?>
		<?php $category = ami_theme_get_category_by_id($category_id); ?>
		<?php if ($category) : ?>
            <section class="section-4 py-5">
                <div class="container-fluid px-0">
                    <div class="bg-gray py-5">
                        <div class="section-header text-center">
                            <h2 class="section-title font-weight-normal d-inline-block py-2 mb-4"><a href="<?php echo $category['url']; ?>"><?php echo $category['name']; ?></a></h2>
                        </div>
						<?php
						$args = array
						(
							'posts_per_page' => 6,
							'cat' => $category_id
						);
						$list_post = ami_theme_get_post($args);
						?>
						<?php if (count($list_post) > 0) : ?>
                            <div class="container">
                                <div class="list-article slide-1">
                                    <div class="owl-carousel owl-theme">
										<?php for ($i = 0; $i < count($list_post); $i++) : ?>
                                            <div class="item article">
                                                <a href="<?php echo $list_post[$i]['url']; ?>" class="d-block mb-3">
                                                    <div class="image-wrapper image-16-9 position-relative">
                                                        <div class="position-absolute image" style="background-image:url('<?php echo $list_post[$i]['image']['large']; ?>');"></div>
                                                    </div>
                                                </a>
                                                <div class="category-wrapper">
                                                    <p class="category mb-2"><a href="<?php echo $list_post[$i]['category_url']; ?>" class="category-title d-flex align-items-center"><?php echo $list_post[$i]['category_name']; ?></a></p>
                                                    <h3 class="title h5"><a href="<?php echo $list_post[$i]['url']; ?>"><?php echo $list_post[$i]['title']; ?></a></h3>
                                                </div>
                                            </div>
										<?php endfor; ?>
                                    </div>
                                </div>
                            </div>
						<?php endif; ?>
                    </div>
                    <div class="py-5 text-center">
                        <a href="<?php echo $category['url']; ?>" class="btn btn-primary text-uppercase"><?php echo __('Xem thêm', 'vetsenergy'); ?></a>
                    </div>
                </div>
            </section>
		<?php endif; ?>

		<?php $image = ami_theme_get_config('cover-2'); ?>
		<?php if ($image) : ?>
			<?php $image = wp_prepare_attachment_for_js($image['id']); ?>
            <section class="section-5 page-cover pb-5 text-white">
                <div class="container-fluid px-0">
                    <div class="position-relative">
                        <div class="image-wrapper position-relative">
                            <div class="position-absolute image" style="background-image:url('<?php echo $image['url']; ?>');"></div>
                        </div>
                        <div class="container position-absolute">
                            <div class="main-info">
                                <p class="title mb-3"><?php echo $image['caption']; ?></p>
                                <p class="summary mb-0"><?php echo $image['description']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
		<?php endif; ?>

		<?php $category_id = pll_get_term(42); ?>
		<?php $category = ami_theme_get_category_by_id($category_id); ?>

		<?php if ($category) : ?>
			<?php
			$args = array
			(
				'posts_per_page' => 5,
				'cat' => $category_id
			);
			$list_post = ami_theme_get_post($args);
			?>
			<?php if (count($list_post) > 0) : ?>
			<?php endif; ?>
            <section class="section-6 pt-5">
                <div class="container-fluid px-0">
                    <div class="list-article slide-2 bg-gray py-5">
                        <div class="container">
                            <div class="position-relative">
                                <div class="owl-carousel owl-theme">
									<?php for ($i = 0; $i < count($list_post); $i++) : ?>
                                        <div class="item article">
                                            <div class="row d-flex flex-column-reverse flex-md-row">
                                                <div class="col-md-6 d-flex justify-content-start align-items-sm-center pr-md-5">
                                                    <div class="main-info">
                                                        <div class="category-wrapper">
                                                            <p class="category pl-1"><a href="<?php echo $category['url']; ?>" class="category-title d-flex align-items-center"><?php echo $category['name']; ?></a></p>
                                                            <h3 class="title h5 mb-3 give-ellipsis give-ellipsis-after-2-lines"><a href="<?php echo $list_post[$i]['url']; ?>"><?php echo $list_post[$i]['title']; ?></a></h2>
                                                        </div>
                                                        <p class="summary mb-0 give-ellipsis give-ellipsis-after-2-lines"><?php echo $list_post[$i]['summary']; ?></p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 d-md-flex align-items-sm-center justify-content-sm-center mb-4 mb-md-0">
                                                    <div class="w-100">
                                                        <a href="<?php echo $list_post[$i]['url']; ?>" class="d-block">
                                                            <div class="image-wrapper image-3-2 position-relative">
                                                                <div class="position-absolute image" style="background-image:url('<?php echo $list_post[$i]['image']['large']; ?>');"></div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
									<?php endfor; ?>
                                </div>
                                <div class="position-absolute text-center" style="bottom: 0px; left: 0px; z-index: 3">
                                    <a href="<?php echo $category['url']; ?>" class="btn btn-primary text-uppercase"><?php echo __('Xem thêm', 'vetsenergy'); ?></a>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </section>
		<?php endif; ?>

		<?php require_once 'includes/section-contact.php'; ?>
        </section>
    </div>

<?php get_footer(); ?>