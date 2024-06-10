<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-213510309-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-213510309-1');
</script>
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5XDKCRPV');</script>
<!-- End Google Tag Manager -->
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png" type="image/x-icon">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W5X2CQW"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <header id="header">
        <div class="header-top d-none d-lg-block pt-2 pb-0 py-lg-2 text-right">
            <div class="container-fluid">
                <ul class="list-unstyled d-inline-block clearfix mb-0">
                    <?php $translations = pll_the_languages(array('raw' => 1)); ?>
                    <?php foreach ($translations as $translation) : ?>
                        <?php if (pll_current_language() != $translation['slug']) : ?>
                            <li class="float-left">
                                <a href="<?php echo $translation['url']; ?>" class="text-uppercase"><i
                                            class="fas fa-globe"></i> <?php echo $translation['slug']; ?></a>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                    <li class="float-left">|</li>
                    <?php $post_id = pll_get_post(66); ?>
                    <?php $post = get_post($post_id); ?>
                    <?php if ($post) : ?>
                        <li class="float-left"><a
                                    href="<?php echo get_permalink($post); ?>"><?php echo $post->post_title; ?></a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
        <div class="header-main py-3 pt-lg-2 pb-lg-4">
            <div class="container-fluid">
                <div class="d-flex justify-content-between">
                    <div class="header-main-left d-flex justify-content-center justify-content-lg-start align-items-center">
                        <a href="<?php echo get_home_url(); ?>" class="d-block">
                            <img src="<?php echo get_template_directory_uri() . '/images/logo-vets-ee.svg'; ?>"
                                 alt="<?php echo get_bloginfo(); ?>" class="logo img-fluid"/>
                        </a>
                    </div>
                    <div class="header-main-right d-flex justify-content-end align-items-center">
                        <div class="header-menu">
                            <?php $list_menu = ami_theme_get_list_menu('primary-menu'); ?>
                            <ul class="primary-menu list-unstyled clearfix mb-0">
	                            <?php for ($i = 0; $i < count($list_menu); $i++) : ?>
                                    <li class="float-left text-center d-none d-lg-block">
                                        <a href="<?php echo $list_menu[$i]['url']; ?>"><?php echo $list_menu[$i]['name']; ?></a>
			                            <?php if (isset($list_menu[$i]["child"]) && !empty($list_menu[$i]["child"])): ?>
                                        <div class="header-menu-child">
                                            <div class="menu-child-body">
                                                <ul class="child-menu list-unstyled clearfix mb-0">
                                                    <?php foreach( $list_menu[$i]["child"] as $child) : ?>
                                                        <li class="float-left text-center d-none d-lg-block">
                                                            <a href="<?php echo $child['url']; ?>"><?php echo $child['name']; ?></a>
                                                        </li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </div>
                                        </div>
			                            <?php endif; ?>
                                    </li>
	                            <?php endfor; ?>
                                <li class="float-left icon px-3 px-xl-4"><a href="#" class="btn-open-search"><i
                                                class="far fa-search"></i></a></li>
                                <li class="float-left icon d-block d-lg-none px-3 px-xl-4"><a href="#"
                                                                                              class="btn-open-menu"><i
                                                class="far fa-bars"></i></a></li>
                            </ul>
                        </div>
                        <div class="header-search justify-content-end align-items-center">
                            <div class="header-search-form ">
                                <form class="form-inline" action="<?php echo esc_url(home_url('/')); ?>">
                                    <button type="submit" class="header-search-icon">
                                        <i class="far fa-search"></i>
                                    </button>
                                    <input class="form-control mr-sm-2 header-nav-search" name="s" type="text"
                                           value="<?php echo get_search_query() ?>"
                                           placeholder="<?php echo __("Tìm kiếm","vetsenergy") ?>" aria-label="Search">
                                </form>
                            </div>
                            <span class="header-search-close btn-close-search"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div id="menu-mobile" class="position-fixed d-block d-lg-none w-100 h-100">
        <div class="menu-mobile-wrapper position-relative w-100 h-100">
            <div class="overlay position-absolute"></div>
            <div class="menu-mobile position-absolute bg-white">
                <div class="position-relative">
                    <div class="menu position-absolute w-100">
                        <div class="p-1 text-right">
                            <a href="#" class="btn-close-menu d-inline-block text-center"><i class="fal fa-times"></i></a>
                        </div>
                        <ul class="list-unstyled mb-0">
                            <?php for ($i = 0; $i < count($list_menu); $i++) : ?>
                                <?php $has_child = count($list_menu[$i]['child']) > 0; ?>
                                <li class="mx-4 py-2">
                                    <div <?php echo($has_child ? 'class="has-child clearfix"' : ''); ?>>
                                        <div class="position-relative">
                                            <a href="<?php echo $list_menu[$i]['url']; ?>"
                                               class="<?php echo($has_child || ($has_child && $list_menu[$i]['url'] == '#') ? 'btn-open-menu-child' : 'btn-open-link'); ?>"><?php echo $list_menu[$i]['name']; ?></a>
                                            <?php if ($has_child) : ?>
                                                <a href="#"
                                                   class="btn-open-menu-child d-block position-absolute text-center">
                                                    <i class="fas fa-chevron-right"></i>
                                                </a>
                                            <?php endif; ?>
                                        </div>
                                        <?php if ($has_child) : ?>
                                            <div class="sub-menu position-absolute w-100 h-100 bg-white">
                                                <div class="p-1 text-right">
                                                    <a href="#" class="btn-close-menu d-inline-block text-center"><i
                                                                class="fal fa-times"></i></a>
                                                </div>
                                                <ul class="list-unstyled mb-0">
                                                    <li class="mx-4 py-2"><a href="#" class="btn-close-menu-child"><i
                                                                    class="fas fa-chevron-left"></i> <?php echo $list_menu[$i]['name']; ?>
                                                        </a></li>
                                                    <?php for ($j = 0; $j < count($list_menu[$i]['child']); $j++) : ?>
                                                        <li class="mx-4 py-2"><a
                                                                    href="<?php echo $list_menu[$i]['child'][$j]['url']; ?>"><?php echo $list_menu[$i]['child'][$j]['name']; ?></a>
                                                        </li>
                                                    <?php endfor; ?>
                                                </ul>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </li>
                            <?php endfor; ?>
                            <?php foreach ($translations as $translation) : ?>
                                <?php if (pll_current_language() != $translation['slug']) : ?>
                                    <li class="mx-4 py-2"><a
                                                href="<?php echo $translation['url']; ?>"><?php echo $translation['name']; ?></a>
                                    </li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

<main>