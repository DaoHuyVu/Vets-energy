    </main>
    
    <footer id="footer">
        <div class="container-fluid text-white px-0">
            <div class="container">
                <div class="pt-5 pb-3">
                    <div class="row">
                        <div class="col-md-6 mb-5 mb-md-0">
                            <?php if (is_home()) : ?>
                                <h1 class="logo mb-3"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-white.png" alt="<?php echo __('Vets Energy', 'vetsenergy'); ?>" /></h1>
                            <?php else : ?>
                                <p class="logo mb-3"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-white.png" alt="<?php echo __('Vets Energy', 'vetsenergy'); ?>" /></p>
                            <?php endif; ?>
                                <div class="company-description mb-4">
                                    <?php $company_description = ami_theme_get_config('company-description'); ?>
                                    <?php if ($company_description) : ?>
                                        <p><?php echo $company_description; ?></p>
                                    <?php endif; ?>
                                    <?php $category_id = pll_get_term(55); ?>
                                    <?php $category = ami_theme_get_category_by_id($category_id); ?>
                                    <?php if ($category) : ?>
                                        <a href="<?php echo $category['url']; ?>" class="btn-read-more text-uppercase"><?php echo __('Xem thêm', 'vetsenergy'); ?> <i class="fal fa-long-arrow-right"></i></a>
                                    <?php endif; ?>
                                </div>
                            <div class="mb-3">
                                <p class="mb-1"><strong><?php echo __('Trụ sở Hà Nội', 'vetsenergy'); ?></strong>: <?php echo ami_theme_get_config('address-hn'); ?></p>
                                <p class="mb-1"><strong><?php echo __('Điện thoại', 'vetsenergy'); ?></strong>: <a href="tel:<?php echo ami_theme_format_phone_number(ami_theme_get_config('phone-number-hn')); ?>"><?php echo ami_theme_get_config('phone-number-hn'); ?></a></p>
                                <p class="mb-1"><strong><?php echo __('Email', 'vetsenergy'); ?></strong>: <a href="mailto:<?php echo ami_theme_get_config('email-hn'); ?>"><?php echo ami_theme_get_config('email-hn'); ?></a></p>
                            </div>
                            <div>
                                <p class="mb-1"><strong><?php echo __('VPĐD HCM', 'vetsenergy'); ?></strong>: <?php echo ami_theme_get_config('address-hcm'); ?></p>
                                <p class="mb-1"><strong><?php echo __('Điện thoại', 'vetsenergy'); ?></strong>: <a href="tel:<?php echo ami_theme_format_phone_number(ami_theme_get_config('phone-number-hcm')); ?>"><?php echo ami_theme_get_config('phone-number-hcm'); ?></a></p>
                                <p class="mb-1"><strong><?php echo __('Email', 'vetsenergy'); ?></strong>: <a href="mailto:<?php echo ami_theme_get_config('email-hcm'); ?>"><?php echo ami_theme_get_config('email-hcm'); ?></a></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-4">
                                <div class="social mb-4">
                                    <p class="footer-title d-inline-block py-1 mb-3 mb-md-4 text-uppercase font-weight-bold"><?php echo __('Mạng xã hội', 'vetsenergy'); ?></p>
                                    <div class="list-social clearfix">
                                        <?php if (ami_theme_get_config('facebook')) : ?>
                                            <div class="item float-left text-center"><a href="<?php echo ami_theme_get_config('facebook'); ?>" target="_blank" rel="nofollow"><span class="icon-facebook"></span></a></div>
                                        <?php endif; ?>
                                        <?php if (ami_theme_get_config('youtube')) : ?>
                                            <div class="item float-left text-center"><a href="<?php echo ami_theme_get_config('youtube'); ?>" target="_blank" rel="nofollow"><span class="icon-youtube"></span></a></div>
                                        <?php endif; ?>
                                        <?php if (ami_theme_get_config('zalo')) : ?>
                                            <div class="item float-left text-center"><a href="<?php echo ami_theme_get_config('zalo'); ?>" target="_blank" rel="nofollow"><span class="icon-zalo"></span></a></div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="menu mb-4">
                                    <p class="footer-title d-inline-block py-1 mb-3 text-uppercase font-weight-bold"><?php echo __('Chính sách', 'vetsenergy'); ?></p>
                                    <?php $list_menu = ami_theme_get_list_menu('footer-menu-1'); ?>
                                    <?php if (count($list_menu) > 0) : ?>
                                        <ul class="list-unstyled clearfix">
                                            <?php for ($i = 0; $i < count($list_menu); $i++) : ?>
                                                <li class="float-left mb-2 mb-md-0"><a href="<?php echo $list_menu[$i]['url']; ?>"><?php echo $list_menu[$i]['name']; ?></a></li>
                                            <?php endfor; ?>
                                        </ul>
                                    <?php endif; ?>
                                </div>
                                <div class="menu">
                                    <p class="footer-title d-inline-block py-1 mb-3 text-uppercase font-weight-bold"><?php echo __('Liên kết khác', 'vetsenergy'); ?></p>
                                    <?php $list_menu = ami_theme_get_list_menu('footer-menu-2'); ?>
                                    <?php if (count($list_menu) > 0) : ?>
                                        <ul class="list-unstyled clearfix">
                                            <?php for ($i = 0; $i < count($list_menu); $i++) : ?>
                                                <li class="float-left mb-2 mb-md-0"><a href="<?php echo $list_menu[$i]['url']; ?>"><?php echo $list_menu[$i]['name']; ?></a></li>
                                            <?php endfor; ?>
                                        </ul>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copyright py-2">
                    <p class="mb-0"><?php echo __('&copy; 2021 Vets Energy - Công ty cổ phần Giải pháp Công nghệ Việt Nam', 'vetsnergy'); ?></p>
                </div>
            </div>
        </div>
    </footer>
    <div id="list-contact" class="position-fixed overflow-hidden clearfix">
                    <a href="tel:024 22 33 44 55" class="item item-phone d-block px-2 p-md-2 text-center" target="_blank" rel="nofollow" title="Gọi điện cho chúng tôi">
                <img src="<?php echo get_template_directory_uri(); ?>/images/icon-phone.svg" alt="<?php echo __('Vets Energy', 'vetsenergy'); ?>" />
            </a>
                    <a href="mailto:info@vets.energy" class="item item-email d-block px-2 p-md-2 text-center" title="Gửi email cho chúng tôi">
                <img src="<?php echo get_template_directory_uri(); ?>/images/icon-email.svg" alt="<?php echo __('Vets Energy', 'vetsenergy'); ?>" />
            </a>
                    <a href="https://zalo.me/0816016336" class="item item-zalo d-block px-2 p-md-2 text-center" target="_blank" rel="nofollow" title="Chat với chúng tôi qua Zalo">
                <img src="<?php echo get_template_directory_uri(); ?>/images/icon-zalo.svg" alt="<?php echo __('Vets Energy', 'vetsenergy'); ?>" />
            </a>
                    <a href="https://m.me/vets.energy" class="item item-facebook-messenger d-block px-2 p-md-2 text-center" target="_blank" rel="nofollow" title="Chat với chúng tôi qua Facebook Messenger">
                <img src="<?php echo get_template_directory_uri(); ?>/images/icon-facebook-messenger.svg" alt="<?php echo __('Vets Energy', 'vetsenergy'); ?>" />
            </a>
            </div>
    
    <div class="hotline-phone-ring">
        <div class="hotline-phone-ring-wrapper">
            <div class="hotline-phone-ring-circle"></div>
            <div class="hotline-phone-ring-circle-fill"></div>
            <div class="hotline-phone-ring-img-circle">
                <a class="icon">
                    <img 
                    src="wp-content\themes\vetsenergy\images\icon-phone-circle.png" 
                    alt="Image"
                    width="50"
                    />                    
                </a>
            </div>
        </div>
        <div class="hotline-modal-wrapper">
            <div class="hotline-modal__item hotline-modal__item-title">
                <p>Hotline<p>
            </div>
            <div class="hotline-modal__item ">        
                <a href="tel:02422334455" target="_blank" rel="nofollow">
                    <div class="hotline-modal__item-inner">
                        <div class="hotline-modal__item-icon-wrapper item-icon-wrapper--bg-blue">
                            <img 
                                src="wp-content\themes\vetsenergy\images\icon-phone-circle.png" 
                                alt="Image"
                                width="24"
                                heigh="24"
                            />  
                        </div>
                        <p>(024) 22 33 44 55 (HN)</p>
                    </div>
                </a>
            </div>
            <div class="hotline-modal__item ">
                <a href="tel:0902 460 336 " target="_blank" rel="nofollow">
                    <div class="hotline-modal__item-inner">
                        <div class="hotline-modal__item-icon-wrapper item-icon-wrapper--bg-green">
                            <img 
                                src="wp-content\themes\vetsenergy\images\icon-phone-circle.png" 
                                alt="Image"
                                width="24"
                                heigh="24"
                            />  
                        </div>
                        <p>0902 460 336 (HCM)</p>
                    </div>
                </a>
            </div>
              <!-- Nút đóng hotline -->
            <span class="hotline-modal-wrapper__btn-close">&times;</span>
        </div>
      
    </div>
    
    <?php wp_footer(); ?>
</body>
</html>