<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'vets_energy' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', 'FA.t160102' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'fX3`uVAOX/AAC18y>4Z1tb+OG<l>4Zjb4#-){8sS4]:rQTpv_>Ks-$~[>Ic@H)cQ' );
define( 'SECURE_AUTH_KEY',  'ZAa{F.^EiEY!$o2URm#v|>@+%D+^Pi:UN&hT0G>1C$IC5OMT~?wRcBIR=rG.#Txe' );
define( 'LOGGED_IN_KEY',    'ETc>Fe{$x>#Bl@rBaVv#tkttKZM.`1c6K%xXR_a.bvRcbrk.Fof=OWo8BgZ>dAe}' );
define( 'NONCE_KEY',        '+@I|3SOR.^I)OvoR,!Z%4QvEJ9S-V2DOv5RB#E$Aq0r${SQESH*(MsRfR3!>d&K:' );
define( 'AUTH_SALT',        'K$%u[O8ucjTpd<0^if2a,%mTODXmr3TniVFb;w<0kG}[|L=2SwT:p)#}~?t:mJ$l' );
define( 'SECURE_AUTH_SALT', 'k5,k0WKj{[G,N5RMyic}+CcV1M8:!;y|im<2S=4%}55-G3ve6<DM Ai*K>R)W0T0' );
define( 'LOGGED_IN_SALT',   ']4Q6bRj;vIitl_9hy.2h[7y-,i?8da0.XiZ:!i?JpW?D`!s0j@NEhEj9Fo32E8MY' );
define( 'NONCE_SALT',       '(z$hlLl[nlp=pQ:%@cig!+iV@27[d76^MkI0;#ASqp#7+6|1]tzl!{(46xd+EE_K' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'kzv2w_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
