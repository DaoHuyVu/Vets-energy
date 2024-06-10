<?php
/**
*
* Template Name: Liên hệ
*
*/
?>

<?php
session_start();

$input = array
(
    'fullname' => '',
    'email' => '',
    'company' => '',
    'phone_number' => '',
    'content' => ''
);

// $input = array
// (
//     'fullname' => 'Đinh Việt Bảo',
//     'email' => 'beststarvn@yahoo.com',
//     'company' => 'Công ty ABC',
//     'phone_number' => '0912345678',
//     'content' => 'ABC'
// );

$captcha = new Captcha("VetsEnergyCaptcha");
$captcha->UserInputID = "captcha-code";
$captcha->CodeLength = 5;
$captcha->ImageWidth = 180;
$captcha->ReloadTooltip = __('Nhấn để làm mới mã xác nhận', 'vetsenergy');
$captcha->SoundEnabled = false;
$captcha->ReloadIconUrl = get_template_directory_uri() . '/images/icon-reload-captcha.png';

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $err_message = array();

    if ($captcha->Validate())
    {
        $input = $_POST;
        foreach ($input as $k => $v)
            $input[str_replace('-', '_', $k)] = trim($input[$k]);

	    if ($input['fullname'] == '')
            $err_message[] = __('Bạn phải nhập Họ tên!', 'vetsenergy');
        
        if ($input['email'] == '')
            $err_message[] = __('Bạn phải nhập Email!', 'vetsenergy');
        elseif (!Ami_Validate::is_email($input['email']))
            $err_message[] = __('Bạn phải nhập Email đúng định dạng!', 'vetsenergy');
        
        if ($input['phone_number'] != '' && !Ami_Validate::is_phone_number($input['phone_number']))
            $err_message[] = __('Bạn phải nhập Điện thoại đúng định dạng!', 'vetsenergy');
    }
    else
        $err_message[] = __('Sai mã xác nhận!', 'vetsenergy');

    if (count($err_message) == 0)
    {
        //$to = 'baodinh@amitech.vn';
        $to = get_option('admin_email');
        $subject = 'Thông tin liên hệ từ bạn "' . $input['fullname'] . '" gửi đến BQT website ' . str_replace(array('http://', 'https://'), '', get_bloginfo('wpurl'));
        $headers = 'From: '. $input['email'] . "\r\n" . 'Reply-To: ' . $input['email'] . "\r\n";
        $content = 'Họ tên: ' . $input['fullname'] . "\n" . 'Email: '. $input['email'] . "\n" . 'Công ty: '. $input['company'] . "\n" . 'Số điện thoại: ' . $input['phone_number'] . "\n" . 'Nội dung: ' . "\n" . $input['content'];
        if (wp_mail($to, $subject, $content, $headers))
        {
            // $input['fullname'] = '';
            // $input['email'] = '';
            // $input['company'] = '';
            // $input['phone_number'] = '';
            // $input['content'] = '';
            // $captcha->Reset();
            echo '<script type="text/javascript">alert(\'' .  __('Cám ơn bạn đã gửi thông tin liên hệ. Chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất.', 'vetsenergy') .  '\'); window.location.replace(window.location.href); </script>';
        }
        else
            echo '<script type="text/javascript">alert(\'' .  __('Có lỗi xảy ra. Vui lòng liên hệ ban quản trị!', 'vetsenergy') .  '\'); window.location.replace(window.location.href);</script>';
    }
    else
    {
        add_action('wp_footer', function ()
        {
            echo '<script type="text/javascript">jQuery(document).ready(function() { jQuery(\'html, body\').animate({ scrollTop: jQuery(\'.alert\').offset().top - 20 }, 500); })</script>';
        });
    }
}
?>

<?php get_header(); ?>

<div id="contact">
    <section class="section-1 section-cover page-cover page-center text-white">
        <div class="container-fluid px-0">
            <div class="position-relative">
                <div class="image-wrapper position-relative">
                    <div class="position-absolute image" style="background-image:url('<?php echo ami_theme_get_image('full'); ?>');"></div>
                </div>
                <div class="container position-absolute">
                    <div class="main-info mx-auto text-center">
                        <h1 class="title mb-3"><?php echo get_the_title(); ?></h1>
                        <div class="summary"><?php echo get_the_content(); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-2 py-64">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-5 mb-md-0">
                    <h2 class="contact-title mb-4"><?php echo __('Trụ sở Hà Nội', 'vetsenergy'); ?></h2>
                    <div class="list-contact">
                        <?php if (ami_theme_get_config('address-hn')) : ?>
                            <div class="item clearfix">
                                <div class="icon float-left"><i class="fas fa-home"></i></div>
                                <div class="content"><strong><?php echo __('Địa chỉ', 'vetsenergy'); ?></strong>: <?php echo ami_theme_get_config('address-hn'); ?></div>
                            </div>
                        <?php endif; ?>
                        <?php if (ami_theme_get_config('phone-number-hn')) : ?>
                            <div class="item clearfix">
                                <div class="icon float-left"><i class="fas fa-phone-alt"></i></div>
                                <div class="content"><strong><?php echo __('Hotline', 'vetsenergy'); ?></strong>: <a href="tel:<?php echo ami_theme_format_phone_number(ami_theme_get_config('phone-number-hn')); ?>"><?php echo ami_theme_get_config('phone-number-hn'); ?></a></div>
                            </div>
                        <?php endif; ?>
                        <?php if (ami_theme_get_config('email-hn')) : ?>
                            <div class="item clearfix">
                                <div class="icon float-left"><i class="fas fa-envelope"></i></div>
                                <div class="content"><strong><?php echo __('Email', 'vetsenergy'); ?></strong>: <a href="mailto:<?php echo ami_theme_get_config('email-hn'); ?>"><?php echo ami_theme_get_config('email-hn'); ?></a></div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14896.329762636999!2d105.7772034!3d21.0293871!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x25225e7413f9ca4!2zQ8O0bmcgdHkgQ1AgR2nhuqNpIHBow6FwIEPDtG5nIG5naOG7hyBWaeG7h3QgTmFtIChWRVRTKQ!5e0!3m2!1svi!2s!4v1623989077735!5m2!1svi!2s" class="embed-responsive-item" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-3">
        <div class="container-fluid px-0 py-64 bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mb-5 mb-md-0">
                        <h2 class="contact-title mb-4"><?php echo __('Văn phòng đại diện HCM', 'vetsenergy'); ?></h2>
                        <div class="list-contact">
                            <?php if (ami_theme_get_config('address-hcm')) : ?>
                                <div class="item clearfix">
                                    <div class="icon float-left"><i class="fas fa-home"></i></div>
                                    <div class="content"><strong><?php echo __('Địa chỉ', 'vetsenergy'); ?></strong>: <?php echo ami_theme_get_config('address-hcm'); ?></div>
                                </div>
                            <?php endif; ?>
                            <?php if (ami_theme_get_config('phone-number-hcm')) : ?>
                                <div class="item clearfix">
                                    <div class="icon float-left"><i class="fas fa-phone-alt"></i></div>
                                    <div class="content"><strong><?php echo __('Hotline', 'vetsenergy'); ?></strong>: <a href="tel:<?php echo ami_theme_format_phone_number(ami_theme_get_config('phone-number-hcm')); ?>"><?php echo ami_theme_get_config('phone-number-hcm'); ?></a></div>
                                </div>
                            <?php endif; ?>
                            <?php if (ami_theme_get_config('email-hcm')) : ?>
                                <div class="item clearfix">
                                    <div class="icon float-left"><i class="fas fa-envelope"></i></div>
                                    <div class="content"><strong><?php echo __('Email', 'vetsenergy'); ?></strong>: <a href="mailto:<?php echo ami_theme_get_config('email-hcm'); ?>"><?php echo ami_theme_get_config('email-hcm'); ?></a></div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.3450532479774!2d106.655194!3d10.784862399999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ec99897f071%3A0xfd4fdcdb79eb63ac!2zNSBUcuG6p24gVHJp4buHdSBMdeG6rXQsIFBoxrDhu51uZyA2LCBUw6JuIELDrG5oLCBUaMOgbmggcGjhu5EgSOG7kyBDaMOtIE1pbmg!5e0!3m2!1svi!2s!4v1681198013837!5m2!1svi!2s" class="embed-responsive-item" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-4 py-64">
        <div class="container">
            <div class="row mb-4">
                <div class="offset-md-2 col-md-8 text-center">
                    <h2 class="section-title mb-3"><?php echo __('Kết nối với chúng tôi', 'vetsenergy'); ?></h2>
                    <p class="section-description"><?php echo __('Gửi tin nhắn cho chúng tôi để được giải đáp mọi thắc mắc về sản phẩm và dịch vụ của Vets Energy.', 'vetsenergy'); ?></p>
                </div>
            </div>
            <?php if ($err_message && count($err_message)) : ?>
                <div class="alert alert-danger" role="alert">
                    <p class="h5 font-weight-bold alert-heading"><?php echo __('Có lỗi xảy ra:', 'vetsenergy'); ?></p>
                    <?php for ($i = 0; $i < count($err_message); $i++) : ?>
                        <p class="mb-0"><?php echo $err_message[$i]; ?></p>
                    <?php endfor; ?>
                </div>
            <?php endif; ?>
            <form method="post">
                <div class="row mb-3">
                    <div class="col-md-6 mb-3 mb-md-0">
                        <input type="text" id="fullname" name="fullname" value="<?php echo $input['fullname']; ?>" class="form-control" placeholder="Họ tên*" maxlength="50" autocomplete="off" />
                    </div>
                    <div class="col-md-6">
                        <input type="text" id="email" name="email" value="<?php echo $input['email']; ?>" class="form-control" placeholder="Email*" maxlength="50" autocomplete="off" />
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6 mb-3 mb-md-0">
                        <input type="text" id="company" name="company" value="<?php echo $input['company']; ?>" class="form-control" placeholder="Công ty" maxlength="50" autocomplete="off" />
                    </div>
                    <div class="col-md-6">
                        <input type="text" id="phone-number" name="phone-number" value="<?php echo $input['phone_number']; ?>" class="form-control" placeholder="Điện thoại*" maxlength="50" autocomplete="off" />
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6 mb-3 mb-md-0">
                        <textarea id="content" name="content" class="form-control" placeholder="Nội dung" autocomplete="off"><?php echo $input['content']; ?></textarea>
                    </div>
                    <div class="col-md-6">
                        <input type="text" id="captcha-code" name="captcha-code" class="form-control mb-3" placeholder="Nhập mã xác nhận*" maxlength="50" autocomplete="off" />
                        <?php echo $captcha->Html(); ?>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary px-4 text-uppercase px-2"><?php echo __('Gửi thông tin', 'vetsenergy'); ?></button>
            </form>
        </div>
    </section>
</div>

<?php get_footer(); ?>