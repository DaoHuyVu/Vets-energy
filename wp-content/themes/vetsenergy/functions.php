<?php
require_once 'includes/botdetect/botdetect.php';

// BEGIN KHAI BAO CHUC NANG CUA THEME
if (!function_exists('ami_theme_setup'))
{
	function ami_theme_setup()
	{
		// Thiet lap textdomain
		$language_folder = get_stylesheet_directory() . '/languages';
		load_theme_textdomain('vetsenergy', $language_folder);

		// Tu dong them link RSS len <head>
		add_theme_support('automatic-feed-links');

		// Them post thumbnail
		add_theme_support('post-thumbnails');
	
		// Them title-tag
		add_theme_support('title-tag');

		// Them menu
		register_nav_menu('primary-menu', __('Menu chính', 'vetsenergy'));
		register_nav_menu('footer-menu-1', __('Menu cuối trang 1', 'vetsenergy'));
		register_nav_menu('footer-menu-2', __('Menu cuối trang 2', 'vetsenergy'));

		// Su dung ma HTML cho cac thanh phan comment, gallery, caption
		add_theme_support('html5', array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption'
		));

		// Them logo
		add_theme_support('custom-logo', array(
			'width' => 250,
			'height' => 250,
			'flex-width' => true,
		));

		// Them style cho text editor
		add_editor_style('css/editor.css');
	}
	add_action('init', 'ami_theme_setup');
}
// END KHAI BAO CHUC NANG CUA THEME

// BEGIN HAM CHEN JS, CSS VAO THEME
if (!function_exists('ami_theme_js_css'))
{
	function ami_theme_js_css()
	{
		wp_register_style('bootstrap-style', get_template_directory_uri() . '/library/bootstrap-4.6.0/css/bootstrap.min.css');
		wp_enqueue_style('bootstrap-style');
		wp_register_style('owl-carousel-style', get_template_directory_uri() . '/library/owl-carousel-2.2.1/css/owl.carousel.min.css');
		wp_enqueue_style('owl-carousel-style');
		wp_register_style('owl-carousel-theme-style', get_template_directory_uri() . '/library/owl-carousel-2.2.1/css/owl.theme.default.min.css');
		wp_enqueue_style('owl-carousel-theme-style');
		wp_register_style('font-awesome-style', get_template_directory_uri() . '/library/font-awesome-5.15.3/css/pro.min.css');
		wp_enqueue_style('font-awesome-style');
		wp_register_style('enicom-style', get_template_directory_uri() . '/library/enicom/css/style.min.css');
		wp_enqueue_style('enicom-style');
		if (is_page_template('page-contact.php'))
		{
			wp_register_style('botdetect-style', get_stylesheet_directory_uri() . '/includes/botdetect/' . CaptchaUrls::LayoutStylesheetUrl());
			wp_enqueue_style('botdetect-style');
		}
		wp_register_style('main-style', get_template_directory_uri() . '/css/style.css', array(), '0.1.1');
		wp_enqueue_style('main-style');

		wp_register_script('jquery-script', get_template_directory_uri() . '/library/jquery-3.5.1/jquery-3.5.1.min.js');
		wp_enqueue_script('jquery-script');
		wp_register_script('bootstrap-script', get_template_directory_uri() . '/library/bootstrap-4.6.0/js/bootstrap.min.js');
		wp_enqueue_script('bootstrap-script');
		wp_register_script('popper-script', get_template_directory_uri() . '/library/popper-1.16.1/popper.min.js');
		wp_enqueue_script('popper-script');
		wp_register_script('owl-carousel-script', get_template_directory_uri() . '/library/owl-carousel-2.2.1/js/owl.carousel.min.js');
		wp_enqueue_script('owl-carousel-script');
		wp_register_script('main-script', get_template_directory_uri() . '/js/script.js', array(), '0.0.3');
		wp_enqueue_script('main-script');

		wp_dequeue_style('wp-block-library');
		wp_dequeue_style('wp-block-library-theme');
		wp_dequeue_style('wc-block-style');
	}
	add_action('wp_enqueue_scripts', 'ami_theme_js_css');
}
// END HAM CHEN JS, CSS VAO THEME

// BEGIN LOAD JS O CUOI TRANG
if (!function_exists('ami_theme_move_script_to_footer'))
{
	function ami_theme_move_script_to_footer()
	{ 
		remove_action('wp_head', 'wp_print_scripts'); 
		remove_action('wp_head', 'wp_print_head_scripts', 9); 
		remove_action('wp_head', 'wp_enqueue_scripts', 1);
	 
		add_action('wp_footer', 'wp_print_scripts', 5);
		add_action('wp_footer', 'wp_enqueue_scripts', 5);
		add_action('wp_footer', 'wp_print_head_scripts', 5); 
	} 
	add_action('wp_enqueue_scripts', 'ami_theme_move_script_to_footer');
}
// END LOAD JS O CUOI TRANG

// BEGIN HAM LAY TOM TAT NOI DUNG BAI VIET
if (!function_exists('ami_theme_get_excerpt'))
{
	function ami_theme_get_excerpt($limit, $content = null, $source = null)
	{
		$limit = $limit - 3;
		
		if (!$content)
			$excerpt = $content = $source == 'content' ? get_the_content() : get_the_excerpt();
		else
			$excerpt = $content;

		$excerpt = preg_replace("(\[.*?\])", '', $excerpt);
		$excerpt = strip_shortcodes($excerpt);
		$excerpt = strip_tags($excerpt);
		$excerpt = mb_substr($excerpt, 0, $limit, 'utf-8');
		$excerpt = mb_substr($excerpt, 0, strripos($excerpt, ' '), 'utf-8');
		$excerpt = trim(mb_ereg_replace('/\s+/', ' ', $excerpt));

		if (mb_strlen($content, 'utf-8') >= $limit)
			$excerpt = $excerpt . '...';

		return $excerpt;
	}
}
// END HAM LAY TOM TAT NOI DUNG BAI VIET

// END HAM LAY ANH
if (!function_exists('ami_theme_get_image'))
{
	function ami_theme_get_image($size)
	{
		if (has_post_thumbnail())
		{
			$image = wp_get_attachment_image_src(get_post_thumbnail_id(), $size);
			return $image[0];
		}
		else
			return get_template_directory_uri() . '/images/no-image.jpg';
	}
}
// END HAM LAY  ANH

// END HAM LAY SIZE ANH
if (!function_exists('ami_theme_get_site_image'))
{
    function ami_theme_get_site_image($size)
    {
        return getimagesize(ami_theme_get_image($size));
    }
}
// END HAM LAY SIZE ANH

// BEGIN HAM PHAN TRANG
if (!function_exists('ami_theme_get_pagination'))
{
	function ami_theme_get_pagination()
	{
		$total_pages = $GLOBALS['wp_query']->max_num_pages;

		if ($total_pages > 1)
		{		
			$current_page = get_query_var('paged') > 1 ? get_query_var('paged') : 1;
			$args = array(
				'base' => preg_replace('/\?.*/', '', get_pagenum_link(1)) . '%_%',
				'format' => 'page/%#%/',
				'current' => $current_page,
				'total' => $total_pages,
				'prev_text' => '<i class="far fa-chevron-left"></i>',
				'next_text' => '<i class="far fa-chevron-right"></i>',
			);
			
			if (!empty($GLOBALS['wp_query']->query_vars['s']))
				$args['add_args'] = array('s' => get_query_var('s'));

	 		echo '<div id="pagination" class="text-center">' . paginate_links($args) . '</div>';
		}
	}
}
// BEGIN HAM PHAN TRANG

// BEGIN HAM BIND DU LIEU CHUYEN MUC
if (!function_exists('ami_theme_bind_category'))
{
	function ami_theme_bind_category($obj, $options)
	{
		$obj_metabox = ami_theme_category_metabox_field_get($obj->cat_ID, $options);
		return array
		(
			'id' => $obj->cat_ID,
			'pid' => $obj->parent,
			'slug' => $obj->slug,
			'name' => $obj->name,
			'url' => get_category_link($obj->cat_ID),
			'description' => $obj->description,
			'layout' => $obj_metabox['layout'],
			'image' => $obj_metabox['image'],
			'cover' => $obj_metabox['cover'],
			'image_homepage' => $obj_metabox['image_homepage'],
			'title_secondary' => $obj_metabox['title_secondary'],
			'description_secondary' => $obj_metabox['description_secondary'],
			'cover_secondary' => $obj_metabox['cover_secondary']
		);
	}
}
// END HAM BIND DU LIEU CHUYEN MUC

// BEGIN HAM LAY THONG TIN CHUYEN MUC
if (!function_exists('ami_theme_get_category_by_id'))
{
	function ami_theme_get_category_by_id($id)
	{
		$obj = get_category($id);
		if (!$obj)
			return null;
		
		return ami_theme_bind_category($obj, ami_theme_category_metabox_get_option());
	}
}
// END HAM LAY THONG TIN CHUYEN MUC

// BEGIN HAM LAY THONG TIN CHUYEN MUC CON
if (!function_exists('ami_theme_get_category_by_parent_id'))
{
	function ami_theme_get_category_by_parent_id($parent_id)
	{
		$list = array();
		$data = get_categories(array('parent' => $parent_id, 'hide_empty' => false));

		if (count($data) == 0)
			return $list;

		$options = ami_theme_category_metabox_get_option();
		for ($i = 0; $i < count($data); $i++)
			$list[] = ami_theme_bind_category($data[$i], $options);

		return $list;
	}
}
// END HAM LAY THONG TIN CHUYEN MUC CON

// BEGIN HAM LAY THONG TIN CHUYEN MUC CHA CAP 1
if (!function_exists('ami_theme_get_category_root_parent'))
{
	function ami_theme_get_category_root_parent($id)
	{
		$category = get_category_parents($id, false, ';', true);
		$category = @explode(';', $category);
		return $category[0];
	}
}
// END HAM LAY THONG TIN CHUYEN MUC CHA CAP 1

// BEGIN HAM LAY THONG TIN THE
if (!function_exists('ami_theme_get_tag'))
{
	function ami_theme_get_tag($id)
	{
		$tag = get_tag($id);

		if (!$tag)
			return null;

		return array
		(
			'id' => $tag->term_id,
			'slug' => $tag->slug,
			'name' => $tag->name,
			'url' => get_tag_link($id)
		);
	}
}
// END HAM LAY THONG TIN THE

// BEGIN HAM DINH DANG SO DIEN THOAI
if (!function_exists('ami_theme_format_phone_number'))
{
	function ami_theme_format_phone_number($value)
	{
		$value = str_replace(' ', '', $value);
		return preg_replace('/[^0-9]+/', '', $value);
	}
}
// END HAM DINH DANG SO DIEN THOAI

// BEGIN HAM LAY THONG TIN CHUYEN MUC CON CUA CHUYEN MUC CHINH
if (!function_exists('ami_theme_get_list_menu_sidebar'))
{
	function ami_theme_get_list_menu_sidebar($category_id)
	{
		$slug = 'primary-menu';
		$list = array();

		$locations = get_nav_menu_locations();


        if (!($locations && array_key_exists($slug, $locations)))
			return $list;

		$menu = get_term($locations[$slug]);
		$list_menu = wp_get_nav_menu_items($menu->term_id);

		if (count($list_menu) == 0)
			return $list;

		if ($category_id == 0)
		{
			for ($i = 0; $i < count($list_menu); $i++)
			{
				if ($list_menu[$i]->menu_item_parent == 0)
				{
					$list[] = array
					(
						'id' => $list_menu[$i]->object_id,
						'object' => $list_menu[$i]->object,
						'name' => $list_menu[$i]->title,
						'url' => $list_menu[$i]->url
					);
				}
			}
		}
		else
		{
			$menu_item_parent = 0;
			for ($i = 0; $i < count($list_menu); $i++)
			{
				if ($list_menu[$i]->object_id == $category_id)
				{
					$menu_item_parent = $list_menu[$i]->ID;
					break;
				}
			}

			// Get category child
			for ($i = 0; $i < count($list_menu); $i++)
			{
				if ($list_menu[$i]->menu_item_parent == $menu_item_parent)
				{
					$list[] = array
					(
						'id' => $list_menu[$i]->object_id,
						'object' => $list_menu[$i]->object,
						'name' => $list_menu[$i]->title,
						'url' => $list_menu[$i]->url
					);
				}
			}
		}

		if (count($list) > 0)
		{
			$option_category_image = get_option('category_image');
			$option_category_cover = get_option('category_cover');
			$option_category_image_homepage = get_option('category_image_homepage');
			$option_category_layout = get_option('category_layout');
			for ($i = 0; $i < count($list); $i++)
			{
				$list[$i]['image'] = '';
				$list[$i]['cover'] = '';
				$list[$i]['image_homepage'] = '';

				switch ($list[$i]['object'])
				{
					case 'category':
						$list[$i]['image'] = is_array($option_category_image) && array_key_exists($list[$i]['id'], $option_category_image) ? $option_category_image[$list[$i]['id']] : '';
						$list[$i]['cover'] = is_array($option_category_cover) && array_key_exists($list[$i]['id'], $option_category_cover) ? $option_category_cover[$list[$i]['id']] : '';
						$list[$i]['layout'] = is_array($option_category_layout) && array_key_exists($list[$i]['id'], $option_category_layout) ? $option_category_layout[$list[$i]['id']] : '';
						$list[$i]['image_homepage'] = is_array($option_category_image_homepage) && array_key_exists($list[$i]['id'], $option_category_image_homepage) ? $option_category_image_homepage[$list[$i]['id']] : '';
						$list[$i]['summary'] = category_description($list[$i]['id']);
						$list[$i]['summary'] = strip_tags($list[$i]['summary']);
						$list[$i]['summary'] = trim($list[$i]['summary']);
						break;
					case 'post':
						$content = get_post_field('post_content', $list[$i]['id']);
						$summary = get_post_meta($list[$i]['id'], 'summary', true);
						$list[$i]['summary'] = $summary ? $summary : ami_theme_get_excerpt(135, $content);
						$list[$i]['image'] = wp_get_attachment_image_src(get_post_thumbnail_id($list[$i]['id']), 'full')[0];
					break;
				}
			}
		}

		return $list;
	}
}
// END HAM LAY THONG TIN CHUYEN MUC CON CUA CHUYEN MUC CHINH

// BEGIN HAM LAY MA NHUNG YOUTUBE
if (!function_exists('ami_theme_get_youtube_embed'))
{
	function ami_theme_get_youtube_embed($link)
	{
		$embed = str_replace('m.youtube.com', 'youtube.com', $link);
		$embed = str_replace('watch?v=', 'embed/', $embed);
		return $embed;
	}
}
// END HAM LAY MA NHUNG YOUTUBE

// BEGIN HAM LAY MENU CHINH
if (!function_exists('ami_theme_get_list_menu'))
{
	function ami_theme_get_list_menu($slug)
	{
		$list_category = array();

		$locations = get_nav_menu_locations();
		if (!($locations && array_key_exists($slug, $locations)))
			return $list_category;

		$menu = get_term($locations[$slug]);
		$list_menu = wp_get_nav_menu_items($menu->term_id);
		if (count($list_menu) == 0)
			return $list_category;

		for ($i = 0; $i < count($list_menu); $i++)
		{
			if ($list_menu[$i]->menu_item_parent == 0)
			{
				$list_category[] = array
				(
					'id' => $list_menu[$i]->ID,
					'name' => $list_menu[$i]->title,
					'url' => $list_menu[$i]->url,
					'child' => array()
				);
			}
		}

		for ($i = 0; $i < count($list_category); $i++)
		{
			for ($j = 0; $j < count($list_menu); $j++)
			{
				if ($list_category[$i]['id'] == $list_menu[$j]->menu_item_parent)
				{
					$list_category[$i]['child'][] =  array
					(
						'id' => $list_menu[$j]->ID,
						'name' => $list_menu[$j]->title,
						'url' => $list_menu[$j]->url
					);
				}
			}
		}

		return $list_category;
	}
}
// END HAM LAY MENU CHINH

// BEGIN HAM LAY DANH SACH BAI VIET
if (!function_exists('ami_theme_get_post'))
{
	function ami_theme_get_post($args)
	{
		$list = array();
		$posts = new WP_Query($args);
		if ($posts->have_posts())
		{
			while ($posts->have_posts())
			{
				$posts->the_post();

				$summary = get_post_meta(get_the_ID(), 'summary', true);
				$category = get_the_category(get_the_ID());
				
				$list[] = array
				(
					'title' => get_the_title(),
					'url' => get_the_permalink(),
					'summary' => $summary ? $summary : ami_theme_get_excerpt(135),
					'image' => array
					(
						'thumbnail' => ami_theme_get_image('thumbnail'),
						'medium' => ami_theme_get_image('medium'),
						'large' => ami_theme_get_image('large'),
						'full' => ami_theme_get_image('full')
					),
					'publish_date' => get_the_date('d/m/Y'),
					'category_name' => $category[0]->name,
					'category_slug' => $category[0]->slug,
					'category_url' => get_category_link($category[0]->term_id),
				);
			}
			wp_reset_postdata();
		}
		
		return $list;
    }
}
// END HAM LAY DANH SACH BAI VIET

// BEGIN THIET LAP TRUONG TUY CHINH CHO BAI VIET
if (!function_exists('ami_theme_metabox_init_js_css'))
{
	function ami_theme_metabox_init_js_css()
	{
		wp_register_script('ami-theme-metabox-script', get_stylesheet_directory_uri() . '/js/ami-metabox.js');
		wp_enqueue_script('ami-theme-metabox-script');	

		wp_register_style('ami-theme-metabox-style', get_template_directory_uri() . '/css/ami-metabox.css');
		wp_enqueue_style('ami-theme-metabox-style');
	}

	add_action('admin_init', 'ami_theme_metabox_init_js_css');
}

if (!function_exists('ami_theme_post_metabox'))
{
	function ami_theme_post_metabox()
	{
		add_meta_box('product-custom-field', __('Thông tin mở rộng', 'vetsenergy'), 'ami_theme_post_metabox_output', 'post');
	}

	add_action('add_meta_boxes', 'ami_theme_post_metabox');
}

if (!function_exists('ami_theme_post_metabox_output'))
{
	function ami_theme_post_metabox_output($post)
	{
		$post_id = pll_get_post($post->ID);
		$summary = get_post_meta($post_id, 'summary', true);

		$html  = '<input type="hidden" id="ami_theme_custom_field" name="ami_theme_custom_field" value="true" />';
		$html .= '<div class="ami-metabox-output">';
		$html .= 	'<div class="ami-metabox-item clearfix">';
		$html .=		'<div class="title">';
		$html .= 			'<label class="label">' . __('Mô tả tóm tắt:', 'vetsenergy') . '</label>';
		$html .= 		'</div>';
		$html .=		'<div class="control">';
		$html .= 			'<textarea id="summary" name="summary" autocomplete="off" class="textarea">' . $summary . '</textarea>';
		$html .= 		'</div>';
		$html .= 	'</div>';
		$html .= '</div>';

		echo $html;
	}
}

if (!function_exists('ami_theme_post_metabox_save'))
{
	function ami_theme_post_metabox_save($post_id)
	{
		if (!isset($_POST['ami_theme_custom_field'])) return;
		
		$value = htmlspecialchars($_POST['summary']);
		$value = stripslashes($value);
		$value = implode('\\n', array_map('sanitize_textarea_field', explode('\\n', $value)));
		update_post_meta($post_id, 'summary', $value);
	}

	add_action('save_post', 'ami_theme_post_metabox_save');
}
// END THIET LAP TRUONG TUY CHINH CHO BAI VIET

// BEGIN THIET LAP TRUONG TUY CHINH CHO CHUYEN MUC
if (!function_exists('ami_theme_metabox_init_js_css'))
{
	function ami_theme_metabox_init_js_css()
	{
		wp_register_script('ami-theme-metabox-script', get_stylesheet_directory_uri() . '/js/ami-metabox.js');
		wp_enqueue_script('ami-theme-metabox-script');	

		wp_register_style('ami-theme-metabox-style', get_template_directory_uri() . '/css/ami-metabox.css');
		wp_enqueue_style('ami-theme-metabox-style');
	}

	add_action('admin_init', 'ami_theme_metabox_init_js_css');
}

if (!function_exists('ami_theme_category_metabox_field'))
{
	function ami_theme_category_metabox_field()
	{
		global $pagenow;

		if ($pagenow != 'post.php' && $pagenow != 'post-new.php' && is_admin())
			wp_enqueue_media();

		add_action('edit_category_form_fields', 'ami_theme_category_metabox_field_edit');
		add_action('edited_category', 'ami_theme_category_metabox_field_save');

		add_action('category_add_form_fields', 'ami_theme_category_metabox_field_add');
		add_action('create_category', 'ami_theme_category_metabox_field_save');

		add_action('delete_category', 'ami_theme_category_metabox_field_delete');
	}

	add_action('init', 'ami_theme_category_metabox_field');
}

if (!function_exists('ami_theme_category_metabox_field_edit'))
{
	function ami_theme_category_metabox_field_edit($tag)
	{
		$options = get_option('category_layout');
		$category_layout = is_array($options) && array_key_exists($tag->term_id, $options) ? $options[$tag->term_id] : '';
		
		$options = get_option('category_image');
		$category_image = is_array($options) && array_key_exists($tag->term_id, $options) ? $options[$tag->term_id] : '';

		$options = get_option('category_cover');
		$category_cover = is_array($options) && array_key_exists($tag->term_id, $options) ? $options[$tag->term_id] : '';
		
		$options = get_option('category_image_homepage');
		$category_image_homepage = is_array($options) && array_key_exists($tag->term_id, $options) ? $options[$tag->term_id] : '';
		
		$options = get_option('category_title_secondary');
		$category_title_secondary = is_array($options) && array_key_exists($tag->term_id, $options) ? $options[$tag->term_id] : '';
		
		$options = get_option('category_description_secondary');
		$category_description_secondary = is_array($options) && array_key_exists($tag->term_id, $options) ? $options[$tag->term_id] : '';
		
		$options = get_option('category_cover_secondary');
		$category_cover_secondary = is_array($options) && array_key_exists($tag->term_id, $options) ? $options[$tag->term_id] : '';
		?>
		<input type="hidden" id="ami_theme_custom_field" name="ami_theme_custom_field" value="true" />
		<tr class="form-field">
			<th scope="row">
				<label for="category_layout"><?php echo __('Giao diện', 'vetsenergy'); ?></label>
			</th>
			<td>
				<select name="category_layout" id="category_layout" class="postform">
					<option value="0"<?php if (!$category_layout) : ?> selected="selected"<?php endif; ?>><?php echo __('Mặc định', 'vetsenergy'); ?></option>
					<option value="1"<?php if ($category_layout == 1) : ?> selected="selected"<?php endif; ?>><?php echo __('Giải pháp', 'vetsenergy'); ?></option>
					<option value="2"<?php if ($category_layout == 2) : ?> selected="selected"<?php endif; ?>><?php echo __('Đào tạo', 'vetsenergy'); ?></option>
					<option value="3"<?php if ($category_layout == 3) : ?> selected="selected"<?php endif; ?>><?php echo __('Sản phẩm', 'vetsenergy'); ?></option>
					<option value="4"<?php if ($category_layout == 4) : ?> selected="selected"<?php endif; ?>><?php echo __('Ứng dụng', 'vetsenergy'); ?></option>
					<option value="5"<?php if ($category_layout == 5) : ?> selected="selected"<?php endif; ?>><?php echo __('Về chúng tôi', 'vetsenergy'); ?></option>
					<option value="6"<?php if ($category_layout == 6) : ?> selected="selected"<?php endif; ?>><?php echo __('Lịch sử hình thành', 'vetsenergy'); ?></option>
					<option value="7"<?php if ($category_layout == 7) : ?> selected="selected"<?php endif; ?>><?php echo __('Ban giám đốc', 'vetsenergy'); ?></option>
					<option value="8"<?php if ($category_layout == 8) : ?> selected="selected"<?php endif; ?>><?php echo __('Thành viên', 'vetsenergy'); ?></option>
					<option value="9"<?php if ($category_layout == 9) : ?> selected="selected"<?php endif; ?>><?php echo __('Hội viên', 'vetsenergy'); ?></option>
					<option value="10"<?php if ($category_layout == 10) : ?> selected="selected"<?php endif; ?>><?php echo __('Đối tác', 'vetsenergy'); ?></option>
					<option value="11"<?php if ($category_layout == 11) : ?> selected="selected"<?php endif; ?>><?php echo __('Phát triển bền vững', 'vetsenergy'); ?></option>
					<option value="12"<?php if ($category_layout == 12) : ?> selected="selected"<?php endif; ?>><?php echo __('Tin tức', 'vetsenergy'); ?></option>
					<option value="13"<?php if ($category_layout == 13) : ?> selected="selected"<?php endif; ?>><?php echo __('Công cụ', 'vetsenergy'); ?></option>
					<option value="-1"<?php if ($category_layout == -1) : ?> selected="selected"<?php endif; ?>><?php echo __('Cấp cuối', 'vetsenergy'); ?></option>
				</select>
			</td>
		</tr>
		<tr class="form-field ami-metabox-item-image">
			<th scope="row">
				<label for="category_image"><?php echo __('Ảnh đại diện', 'vetsenergy'); ?></label>
			</th>
			<td>
				<div class="image" style="display: none;">
					<input type="hidden" name="category_image" id="category_image" value="<?php echo $category_image; ?>" autocomplete="off" />
					<img src="<?php echo $category_image; ?>" alt="<?php echo __('Ảnh đại diện', 'vetsenergy'); ?>" />
				</div>
				<input class="button button-select" type="button" value="<?php echo __('Chọn', 'vetsenergy'); ?>" data-title="<?php echo __('Chọn ảnh đại diện', 'vetsenergy'); ?>" />
				<input class="button button-delete" type="button" value="<?php echo __('Xóa', 'vetsenergy'); ?>" style="display: none;" />
			</td>
		</tr>
		<tr class="form-field ami-metabox-item-image">
			<th scope="row">
				<label for="category_cover"><?php echo __('Ảnh bìa', 'vetsenergy'); ?></label>
			</th>
			<td>
				<div class="image" style="display: none;">
					<input type="hidden" name="category_cover" id="category_cover" value="<?php echo $category_cover; ?>" autocomplete="off" />
					<img src="<?php echo $category_cover; ?>" alt="<?php echo __('Ảnh bìa', 'vetsenergy'); ?>" />
				</div>
				<input class="button button-select" type="button" value="<?php echo __('Chọn', 'vetsenergy'); ?>" data-title="<?php echo __('Chọn ảnh bìa', 'vetsenergy'); ?>" />
				<input class="button button-delete" type="button" value="<?php echo __('Xóa', 'vetsenergy'); ?>" style="display: none;" />
			</td>
		</tr>
		<tr class="form-field ami-metabox-item-image">
			<th scope="row">
				<label for="category_image_homepage"><?php echo __('Ảnh trang chủ', 'vetsenergy'); ?></label>
			</th>
			<td>
				<div class="image" style="display: none;">
					<input type="hidden" name="category_image_homepage" id="category_image_homepage" value="<?php echo $category_image_homepage; ?>" autocomplete="off" />
					<img src="<?php echo $category_image_homepage; ?>" alt="<?php echo __('Ảnh trang chủ', 'vetsenergy'); ?>" />
				</div>
				<input class="button button-select" type="button" value="<?php echo __('Chọn', 'vetsenergy'); ?>" data-title="<?php echo __('Chọn ảnh đại diện', 'vetsenergy'); ?>" />
				<input class="button button-delete" type="button" value="<?php echo __('Xóa', 'vetsenergy'); ?>" style="display: none;" />
			</td>
		</tr>
		<tr class="form-field">
			<th scope="row"><label for="category_title_secondary"><?php echo __('Tiêu đề phụ', 'vetsenergy'); ?></label></th>
			<td><input name="category_title_secondary" id="category_title_secondary" type="text" value="<?php echo $category_title_secondary; ?>" size="40" /></td>
		</tr>
		<tr class="form-field">
			<th scope="row"><label for="category_description_secondary"><?php echo __('Mô tả phụ', 'vetsenergy'); ?></label></th>
			<td><textarea name="category_description_secondary" id="category_description_secondary" rows="5" cols="50" class="large-text"><?php echo $category_description_secondary; ?></textarea></td>
		</tr>
		<tr class="form-field ami-metabox-item-image">
			<th scope="row">
				<label for="category_cover_secondary"><?php echo __('Ảnh bìa phụ', 'vetsenergy'); ?></label>
			</th>
			<td>
				<div class="image" style="display: none;">
					<input type="hidden" name="category_cover_secondary" id="category_cover_secondary" value="<?php echo $category_cover_secondary; ?>" autocomplete="off" />
					<img src="<?php echo $category_cover_secondary; ?>" alt="<?php echo __('Ảnh bìa phụ', 'vetsenergy'); ?>" />
				</div>
				<input class="button button-select" type="button" value="<?php echo __('Chọn', 'vetsenergy'); ?>" data-title="<?php echo __('Chọn ảnh bìa phụ', 'vetsenergy'); ?>" />
				<input class="button button-delete" type="button" value="<?php echo __('Xóa', 'vetsenergy'); ?>" style="display: none;" />
			</td>
		</tr>
		<?php
	}
}

if (!function_exists('ami_theme_category_metabox_field_add'))
{
	function ami_theme_category_metabox_field_add($tag)
	{
		?>
		<input type="hidden" id="ami_theme_custom_field" name="ami_theme_custom_field" value="true" />
		<div class="form-field">
			<label for="category_layout"><?php echo __('Giao diện', 'vetsenergy'); ?></label>
			<select name="category_layout" id="category_layout" class="postform">
				<option value="0"><?php echo __('Mặc định', 'vetsenergy'); ?></option>
				<option value="1"<?php if ($category_layout == 1) : ?> selected="selected"<?php endif; ?>><?php echo __('Giải pháp', 'vetsenergy'); ?></option>
				<option value="2"<?php if ($category_layout == 2) : ?> selected="selected"<?php endif; ?>><?php echo __('Đào tạo', 'vetsenergy'); ?></option>
				<option value="3"<?php if ($category_layout == 3) : ?> selected="selected"<?php endif; ?>><?php echo __('Sản phẩm', 'vetsenergy'); ?></option>
				<option value="4"<?php if ($category_layout == 4) : ?> selected="selected"<?php endif; ?>><?php echo __('Ứng dụng', 'vetsenergy'); ?></option>
				<option value="5"<?php if ($category_layout == 5) : ?> selected="selected"<?php endif; ?>><?php echo __('Về chúng tôi', 'vetsenergy'); ?></option>
				<option value="6"<?php if ($category_layout == 6) : ?> selected="selected"<?php endif; ?>><?php echo __('Lịch sử hình thành', 'vetsenergy'); ?></option>
				<option value="7"<?php if ($category_layout == 7) : ?> selected="selected"<?php endif; ?>><?php echo __('Ban giám đốc', 'vetsenergy'); ?></option>
				<option value="8"<?php if ($category_layout == 8) : ?> selected="selected"<?php endif; ?>><?php echo __('Thành viên', 'vetsenergy'); ?></option>
				<option value="9"<?php if ($category_layout == 9) : ?> selected="selected"<?php endif; ?>><?php echo __('Hội viên', 'vetsenergy'); ?></option>
				<option value="10"<?php if ($category_layout == 10) : ?> selected="selected"<?php endif; ?>><?php echo __('Đối tác', 'vetsenergy'); ?></option>
                <option value="11"<?php if ($category_layout == 11) : ?> selected="selected"<?php endif; ?>><?php echo __('Phát triển bền vững', 'vetsenergy'); ?></option>
                <option value="12"<?php if ($category_layout == 12) : ?> selected="selected"<?php endif; ?>><?php echo __('Tin tức', 'vetsenergy'); ?></option>
                <option value="13"<?php if ($category_layout == 13) : ?> selected="selected"<?php endif; ?>><?php echo __('Công cụ', 'vetsenergy'); ?></option>
                <option value="-1"<?php if ($category_layout == -1) : ?> selected="selected"<?php endif; ?>><?php echo __('Cấp cuối', 'vetsenergy'); ?></option>
			</select>
		</div>
		<div class="form-field ami-metabox-item-image">
			<label for="category_image"><?php echo __('Ảnh đại diện', 'vetsenergy'); ?></label>
			<div class="image" style="display: none;">
				<input type="hidden" name="category_image" id="category_image" value="" autocomplete="off" />
				<img src="" alt="<?php echo __('Ảnh đại diện', 'vetsenergy'); ?>" />
			</div>
			<input class="button button-select" type="button" value="<?php echo __('Chọn', 'vetsenergy'); ?>" data-title="<?php echo __('Chọn ảnh đại diện', 'vetsenergy'); ?>" />
			<input class="button button-delete" type="button" value="<?php echo __('Xóa', 'vetsenergy'); ?>" style="display: none;" />
		</div>
		<div class="form-field ami-metabox-item-image">
			<label for="category_cover"><?php echo __('Ảnh bìa', 'vetsenergy'); ?></label>
			<div class="image" style="display: none;">
				<input type="hidden" name="category_cover" id="category_cover" value="" autocomplete="off" />
				<img src="" alt="<?php echo __('Ảnh bìa', 'vetsenergy'); ?>" />
			</div>
			<input class="button button-select" type="button" value="<?php echo __('Chọn', 'vetsenergy'); ?>" data-title="<?php echo __('Chọn ảnh bìa', 'vetsenergy'); ?>" />
			<input class="button button-delete" type="button" value="<?php echo __('Xóa', 'vetsenergy'); ?>" style="display: none;" />
		</div>
		<div class="form-field">
			<label for="category_title_secondary"><?php echo __('Tiêu đề phụ', 'vetsenergy'); ?></label>
			<input type="text" name="category_title_secondary" id="category_title_secondary" value="" size="40" />
		</div>
		<div class="form-field">
			<label for="category_description_secondary"><?php echo __('Mô tả phụ', 'vetsenergy'); ?></label>
			<textarea name="category_description_secondary" id="category_description_secondary" rows="5" cols="40"></textarea>
		</div>
		<div class="form-field ami-metabox-item-image">
			<label for="category_cover_secondary"><?php echo __('Ảnh bìa phụ', 'vetsenergy'); ?></label>
			<div class="image" style="display: none;">
				<input type="hidden" name="category_cover_secondary" id="category_cover_secondary" value="" autocomplete="off" />
				<img src="" alt="<?php echo __('Ảnh bìa phụ', 'vetsenergy'); ?>" />
			</div>
			<input class="button button-select" type="button" value="<?php echo __('Chọn', 'vetsenergy'); ?>" data-title="<?php echo __('Chọn ảnh bìa phụ', 'vetsenergy'); ?>" />
			<input class="button button-delete" type="button" value="<?php echo __('Xóa', 'vetsenergy'); ?>" style="display: none;" />
		</div>
		<?php
	}
}

if (!function_exists('ami_theme_category_metabox_field_save'))
{
	function ami_theme_category_metabox_field_save($term_id)
	{
		if (isset($_POST['ami_theme_custom_field']))
		{
			$value = get_option('category_layout');
			$value[$term_id] = $_POST['category_layout'];
			update_option('category_layout', $value);

			$value = get_option('category_image');
			$value[$term_id] = $_POST['category_image'];
			update_option('category_image', $value);

			$value = get_option('category_cover');
			$value[$term_id] = $_POST['category_cover'];
			update_option('category_cover', $value);

			$value = get_option('category_image_homepage');
			$value[$term_id] = $_POST['category_image_homepage'];
			update_option('category_image_homepage', $value);

			$value = get_option('category_title_secondary');
			$value[$term_id] = htmlspecialchars($_POST['category_title_secondary']);
			$value[$term_id] = stripslashes($value[$term_id]);
			update_option('category_title_secondary', $value);

			$value = get_option('category_description_secondary');
			$value[$term_id] = htmlspecialchars($_POST['category_description_secondary']);
			$value[$term_id] = stripslashes($value[$term_id]);
			$value[$term_id] = implode('\\n', array_map('sanitize_textarea_field', explode('\\n', $value[$term_id])));
			update_option('category_description_secondary', $value);

			$value = get_option('category_cover_secondary');
			$value[$term_id] = $_POST['category_cover_secondary'];
			update_option('category_cover_secondary', $value);
		}
	}
}



if (!function_exists('ami_theme_category_metabox_field_delete'))
{
	function ami_theme_category_metabox_field_delete($term_id)
	{
		$value = get_option('category_layout');
		unset($value[$term_id]);
		update_option('category_layout', $value);

		$value = get_option('category_image');
		unset($value[$term_id]);
		update_option('category_image', $value);

		$value = get_option('category_cover');
		unset($value[$term_id]);
		update_option('category_cover', $value);

		$value = get_option('category_title_secondary');
		unset($value[$term_id]);
		update_option('category_title_secondary', $value);

		$value = get_option('category_description_secondary');
		unset($value[$term_id]);
		update_option('category_description_secondary', $value);

		$value = get_option('category_cover_secondary');
		unset($value[$term_id]);
		update_option('category_cover_secondary', $value);
	}
}

if (!function_exists('ami_theme_category_metabox_get_option'))
{
	function ami_theme_category_metabox_get_option()
	{
		return array
		(
			'layout' => get_option('category_layout'),
			'image' => get_option('category_image'),
			'image_homepage' => get_option('category_image_homepage'),
			'cover' => get_option('category_cover'),
			'title_secondary' => get_option('category_title_secondary'),
			'description_secondary' => get_option('category_description_secondary'),
			'cover_secondary' => get_option('category_cover_secondary')
		);
    }
}

if (!function_exists('ami_theme_category_metabox_field_get'))
{
	function ami_theme_category_metabox_field_get($category_id, $options)
	{
		$category = array();

		foreach ($options as $key => $value)
			$category[$key] = is_array($options[$key]) && array_key_exists($category_id, $options[$key]) ? $options[$key][$category_id] : '';

		return $category;
	}
}

if (!function_exists('ami_theme_category_metabox_backup'))
{
	function ami_theme_category_metabox_backup()
	{
		$dir_path = get_template_directory() . '/data';
		if (!file_exists($dir_path))
			mkdir($dir_path);

		$file_path = $dir_path . '/category_metabox.json';
		$data = array
		(
			'layout' => get_option('category_layout'),
			'image' => get_option('category_image'),
			'image_homepage' => get_option('category_image_homepage'),
			'cover' => get_option('category_cover'),
			'title_secondary' => get_option('category_title_secondary'),
			'description_secondary' => get_option('category_description_secondary'),
			'cover_secondary' => get_option('category_cover_secondary')
		);
		file_put_contents($file_path, json_encode($data));
	}
}

if (!function_exists('ami_theme_category_metabox_restore'))
{
	function ami_theme_category_metabox_restore()
	{
		$file_path = get_template_directory() . '/data/category_metabox.json';
		if (!file_exists($file_path))
			return;

		$data = file_get_contents($file_path);
		$data = (array) json_decode($data);

		foreach ($data as $key => $value)
			update_option('category_' . $key, (array) $data[$key]);
	}
}
// END THIET LAP TRUONG TUY CHINH CHO CHUYEN MUC

// BEGIN HAM THIET LAP FAVICON TRANG ADMIN
if (!function_exists('ami_theme_set_admin_favicon'))
{
	function ami_theme_set_admin_favicon()
	{
		echo '<link rel="Shortcut Icon" type="image/x-icon" href="' . get_template_directory_uri() . '/favicon.png" />';
	}
	add_action('admin_head', 'ami_theme_set_admin_favicon');
}
// END HAM THIET LAP FAVICON TRANG ADMIN

// BEGIN HAM LAY GIA TRI CAU HINH WEBSITE
if (!function_exists('ami_theme_get_config'))
{
	function ami_theme_get_config($key)
	{
		if (!$key)
			return null;

		global $theme_options;

		$suffix = pll_current_language() == pll_default_language() || !pll_current_language() ? '' : '_' . pll_current_language();

		$key = $key . $suffix;
		if (!array_key_exists($key, $theme_options))
			return null;
		
		return $theme_options[$key];
	}
}

// END HAM LAY GIA TRI CAU HINH WEBSITE

// BEGIN CLASS KIEM TRA DU LIEU
if (!class_exists('Ami_Validate'))
{
	class Ami_Validate
	{
		public static function is_int($value)
		{
			return filter_var($value, FILTER_VALIDATE_INT) === 0 || filter_var($value, FILTER_VALIDATE_INT);
		}

		public static function is_date($value, $format = 'd/m/Y')
		{
			$date = DateTime::createFromFormat($format, $value);
			return $date && $date->format($format) === $value;
		}

		public static function is_time($value)
		{
			return preg_match('/^([01]?[0-9]|2[0-3])(:[0-5][0-9])$/', $value);
		}

		public static function is_email($value)
		{
			return preg_match('/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/', $value);
		}

		public static function is_phone_number($value)
		{
			return preg_match('/(84|0[3|5|7|8|9])+([0-9]{8})\b/', $value);
		}
	}
}
// END CLASS KIEM TRA DU LIEU

// BEGIN THIET LAP CAU HINH WEBSITE
if (!class_exists('Ami_Theme_Options'))
{
	class Ami_Theme_Options
	{
		public $args = array();
		public $sections = array();
		public $theme;
		public $ReduxFramework;

		public function __construct()
		{
			if (!class_exists('ReduxFramework')) return;

			// This is needed. Bah WordPress bugs.;)
			if (Redux_Helpers::isTheme( __FILE__ ) == true)
				$this->initSettings();
			else
				add_action('plugins_loaded', array($this, 'initSettings'), 10);

			if (!function_exists('redux_disable_dev_mode_plugin'))
			{
				function redux_disable_dev_mode_plugin($redux)
				{
					if ($redux->args['opt_name'] != 'redux_demo')
					{
						if ($redux->args['dev_mode'] == true)
							$redux->args['dev_mode'] = false;
					}
					else
					{
						if ($redux->args['dev_mode'] == false)
							$redux->args['dev_mode'] = true;
					}
				}

				add_action('redux/construct', 'redux_disable_dev_mode_plugin');
			}
		}

		public function initSettings()
		{
			// Set the default arguments
			$this->setArguments();

			// Set a few help tabs so you can see how it's done
			//$this->setHelpTabs();

			// Create the sections and fields
			$translations = pll_the_languages(array('raw' => 1));
			foreach ($translations as $translation)
				$this->setSections($translation);

			// No errors please
			if (!isset($this->args['opt_name'])) return;

			$this->ReduxFramework = new ReduxFramework($this->sections, $this->args);
		}

		public function setSections($translation)
		{
			$suffix_id = $translation['slug'] == pll_default_language() ? '' : '_' . $translation['slug'];
			$suffix_title = ' (' . strtoupper($translation['slug']) . ')';

			// ACTUAL DECLARATION OF SECTIONS
			$this->sections[] = array
			(
				'title' => __('Trang chủ', 'vetsenergy') . $suffix_title,
				'icon' => 'el el-home',
				'fields' => array
				(
					array
					(
						'id' => 'cover-1' . $suffix_id,
						'type' => 'media',
						'title'	=> __('Ảnh bìa 1', 'vetsenergy'),
						'desc' => __('Hiển thị tốt nhất với kích thước 1440x560px.', 'vetsenergy')
					),
					array
					(
						'id' => 'cover-2' . $suffix_id,
						'type' => 'media',
						'title'	=> __('Ảnh bìa 2', 'vetsenergy'),
						'desc' => __('Hiển thị tốt nhất với kích thước 1440x560px.', 'vetsenergy')
					)
				)
			);

			$this->sections[] = array
			(
				'title' => __('Đối tác', 'vetsenergy') . $suffix_title,
				'icon' => 'el el-globe-alt',
				'fields' => array
				(
					array
					(
						'id' => 'partner' . $suffix_id,
						'type' => 'gallery',
						'title'	=> __('Thành viên', 'vetsenergy'),
						'desc' => __('Hiển thị tốt nhất với kích thước 215x104px.', 'vetsenergy')
					),
					array
					(
						'id' => 'partner-2' . $suffix_id,
						'type' => 'gallery',
						'title'	=> __('Hội viên', 'vetsenergy'),
						'desc' => __('Hiển thị tốt nhất với kích thước 215x104px.', 'vetsenergy')
					),
					array
					(
						'id' => 'partner-3' . $suffix_id,
						'type' => 'gallery',
						'title'	=> __('Đối tác', 'vetsenergy'),
						'desc' => __('Hiển thị tốt nhất với kích thước 215x104px.', 'vetsenergy')
					)
				)
			);

			$this->sections[] = array
			(
				'title' => __('Mạng xã hội', 'vetsenergy') . $suffix_title,
				'icon' => 'el el-group',
				'fields' => array
				(
					array
					(
						'id' => 'facebook' . $suffix_id,
						'type' => 'text',
						'title'	=> __('Facebook', 'vetsenergy')
					),
					array
					(
						'id' => 'youtube' . $suffix_id,
						'type' => 'text',
						'title'	=> __('Youtube', 'vetsenergy')
					)
				)
			);

			$this->sections[] = array
			(
				'title' => __('Thông tin công ty', 'vetsenergy') . $suffix_title,
				'icon' => 'el el-website',
				'fields' => array
				(
					array
					(
						'id' => 'company-description' . $suffix_id,
						'type' => 'textarea',
						'title'	=> __('Giới thiệu', 'vetsenergy')
					),
					array
					(
						'id' => 'address-hn' . $suffix_id,
						'type' => 'text',
						'title'	=> __('Trụ sở (Hà Nội)', 'vetsenergy')
					),
					array
					(
						'id' => 'phone-number-hn' . $suffix_id,
						'type' => 'text',
						'title'	=> __('Điện thoại (Hà Nội)', 'vetsenergy')
					),
					array
					(
						'id' => 'email-hn' . $suffix_id,
						'type' => 'text',
						'title'	=> __('Email (Hà Nội)', 'vetsenergy')
					),
					array
					(
						'id' => 'address-hcm' . $suffix_id,
						'type' => 'text',
						'title'	=> __('VPDD (HCM)', 'vetsenergy')
					),
					array
					(
						'id' => 'phone-number-hcm' . $suffix_id,
						'type' => 'text',
						'title'	=> __('Điện thoại (HCM)', 'vetsenergy')
					),
					array
					(
						'id' => 'email-hcm' . $suffix_id,
						'type' => 'text',
						'title'	=> __('Email (HCM)', 'vetsenergy')
					),
				)
			);
		}

		public function setHelpTabs()
		{
			// Custom page help tabs, displayed using the help API. Tabs are shown in order of definition.
			$this->args['help_tabs'][] = array
			(
				'id' => 'redux-help-tab-1',
				'title' => __('Theme Information 1', 'vetsenergy'),
				'content' => __('<p>This is the tab content, HTML is allowed.</p>', 'vetsenergy')
			);

			$this->args['help_tabs'][] = array
			(
				'id' => 'redux-help-tab-2',
				'title' => __('Theme Information 2', 'vetsenergy'),
				'content' => __('<p>This is the tab content, HTML is allowed.</p>', 'vetsenergy')
			);

			// Set the help sidebar
			$this->args['help_sidebar'] = __('<p>This is the sidebar content, HTML is allowed.</p>', 'vetsenergy');
		}

		/**
		 * All the possible arguments for Redux.
		 * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
		 * */
		public function setArguments()
		{
			$theme = wp_get_theme(); // For use with some settings. Not necessary.

			$this->args = array
			(
				// TYPICAL -> Change these values as you need/desire
				'opt_name' => 'theme_options',
				// This is where your data is stored in the database and also becomes your global variable name.
				'display_name' => $theme->get('Name'),
				// Name that appears at the top of your panel
				'display_version'=> $theme->get('Version'),
				// Version that appears at the top of your panel
				'menu_type' => 'menu',
				//Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
				'allow_sub_menu' => true,
				// Show the sections below the admin menu item or not
				'menu_title' => __('Cấu hình Website', 'vetsenergy'),
				'page_title' => __('Cấu hình Website', 'vetsenergy'),
				// You will need to generate a Google API key to use this feature.
				// Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
				'google_api_key' => '',
				// Must be defined to add google fonts to the typography module

				'async_typography' => false,
				// Use a asynchronous font on the front end or font string
				'admin_bar' => true,
				// Show the panel pages on the admin bar
				'global_variable' => '',
				// Set a different name for your global variable other than the opt_name
				'dev_mode' => false,
				// Show the time the page took to load, etc
				'customizer' => true,
				// Enable basic customizer support

				// OPTIONAL -> Give you extra features
				'page_priority' => null,
				// Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
				'page_parent' => 'themes.php',
				// For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
				'page_permissions' => 'manage_options',
				// Permissions needed to access the options panel.
				'menu_icon' => '',
				// Specify a custom URL to an icon
				'last_tab' => '',
				// Force your panel to always open to a specific tab (by id)
				'page_icon' => '-iconthemes',
				// Icon displayed in the admin panel next to your menu_title
				'page_slug' => 'theme_options',
				// Page slug used to denote the panel
				'save_defaults' => true,
				// On load save the defaults to DB before user clicks save or not
				'default_show' => false,
				// If true, shows the default value next to each field that is not the default value.
				'default_mark' => '',
				// What to print by the field's title if the value shown is default. Suggested: *
				'show_import_export' => true,
				// Shows the Import/Export panel when not used as a field.

				// CAREFUL -> These options are for advanced use only
				'transient_time' => 60 * MINUTE_IN_SECONDS,
				'output' => true,
				// Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
				'output_tag' => true,
				// Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
				// 'footer_credit' => '', // Disable the footer credit of Redux. Please leave if you can help it.

				// FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
				'database' => '',
				// possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
				'system_info' => false,
				// REMOVE

				// HINTS
				'hints' => array
				(
					'icon' => 'icon-question-sign',
					'icon_position' => 'right',
					'icon_color' => 'lightgray',
					'icon_size' => 'normal',
					'tip_style' => array
					(
						'color' => 'light',
						'shadow' => true,
						'rounded' => false,
						'style' => ''
					),
					'tip_position' => array
					(
						'my' => 'top left',
						'at' => 'bottom right'
					),
					'tip_effect' => array
					(
						'show' => array
						(
							'effect' => 'slide',
							'duration' => '500',
							'event' => 'mouseover'
						),
						'hide' => array
						(
							'effect' => 'slide',
							'duration' => '500',
							'event' => 'click mouseleave'
						)
					)
				)
			);

			// SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
			$this->args['share_icons'][] = array
			(
				'url' => 'https://www.facebook.com/beststarvn',
				'title' => 'ß€sTstαrVN\'s Facebook',
				'icon' => 'el el-facebook'
			);
			$this->args['share_icons'][] = array
			(
				'url' => 'https://plus.google.com/104153530003897374373',
				'title' => 'ß€sTstαrVN\'s Google+',
				'icon' => 'el el-googleplus'
			);
			$this->args['share_icons'][] = array
			(
				'url' => 'https://twitter.com/beststarvn',
				'title' => 'ß€sTstαrVN\'s Twitter',
				'icon' => 'el el-twitter'
			);

			// Panel Intro text -> before the form
			if (!isset($this->args['global_variable']) || $this->args['global_variable'] !== false)
			{
				if (!empty($this->args['global_variable']))
					$v = $this->args['global_variable'];
				else
					$v = str_replace('-', '_', $this->args['opt_name'] );

				$this->args['intro_text'] = sprintf(__('', 'vetsenergy'), $v);
			}
			else
				$this->args['intro_text'] = __('', 'vetsenergy');

			// Add content after the form.
			$this->args['footer_text'] = __('', 'vetsenergy');
		}
	}

	global $reduxConfig;
	$reduxConfig = new Ami_Theme_Options();
}
// END THIET LAP CAU HINH WEBSITE

// BEGIN SU DUNG TEXT EDITOR PHIEN BAN WORDPRESS 4.x
add_filter('use_block_editor_for_post', '__return_false');
// END SU DUNG TEXT EDITOR PHIEN BAN WORDPRESS 4.x

// BEGIN LOAI BO ADMIN BAR
add_filter('show_admin_bar', '__return_false');
// END LOAI BO ADMIN BAR

// BEGIN LOAI BO GOOGLE RICH SNIPPET YOAST SEO
add_filter('wpseo_json_ld_output', '__return_false');
// END LOAI BO GOOGLE RICH SNIPPET YOAST SEO

// BEGIN TUY CHINH TRUY VAN DU LIEU BAI VIET THEO GIAO DIEN CHUYEN MUC
if (!function_exists('ami_pre_get_posts'))
{
	function ami_pre_get_posts($query)
	{
		if ($query->is_main_query() && !is_admin())
		{
			if ($query->is_category())
			{
				$query->set('orderby', 'publish_date');
				$query->set('order', 'DESC');

				$category = get_queried_object();
				$layout = get_option('category_layout');
				$layout = is_array($layout) && array_key_exists($category->term_id, $layout) ? $layout[$category->term_id] : 0;
		
				switch ($layout)
				{
					case 3:
						$query->set('posts_per_page', '12');
						break;
					case 6:
						$query->set('orderby', 'publish_date');
						$query->set('order', 'ASC');
						break;
				}
			}
			elseif ($query->is_tag())
				$query->set('posts_per_page', '12');
		}
	}
	add_action('pre_get_posts', 'ami_pre_get_posts');
}
// END TUY CHINH TRUY VAN DU LIEU BAI VIET THEO GIAO DIEN CHUYEN MUC

if ( ! class_exists( 'ami_register_Tool' ) ) {

    class ami_register_Tool{
        public function __construct(){
            add_action( 'init',[$this,'ami_tool_init'] );
        }
        public function ami_tool_init() {
            $labels = array(
                'name'                  => _x( 'Công cụ', 'Post type general name', 'vetsenergy' ),
                'singular_name'         => _x( 'Công cụ', 'Post type singular name', 'vetsenergy' ),
                'menu_name'             => _x( 'Công cụ', 'Admin Menu text', 'vetsenergy' ),
                'name_admin_bar'        => _x( 'Công cụ', 'Add New on Toolbar', 'vetsenergy' ),
                'add_new'               => __( 'Thêm mới', 'vetsenergy' ),
                'add_new_item'          => __( 'Thêm mới Công cụ', 'vetsenergy' ),
                'new_item'              => __( 'Thêm mới Công cụ', 'vetsenergy' ),
                'edit_item'             => __( 'Edit Công cụ', 'vetsenergy' ),
                'view_item'             => __( 'View Công cụ', 'vetsenergy' ),
                'all_items'             => __( 'Tất cả công cụ', 'vetsenergy' ),
                'search_items'          => __( 'Tìm kiếm công cụ', 'vetsenergy' ),
                'parent_item_colon'     => __( 'Parent Tools:', 'vetsenergy' ),
                'not_found'             => __( 'No Tools found.', 'vetsenergy' ),
                'not_found_in_trash'    => __( 'No Tools found in Trash.', 'vetsenergy' ),
                'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'vetsenergy' ),
                'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'vetsenergy' ),
                'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'vetsenergy' ),
                'archives'              => _x( 'Tool archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'vetsenergy' ),
                'insert_into_item'      => _x( 'Insert into Tool', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'vetsenergy' ),
                'uploaded_to_this_item' => _x( 'Uploaded to this Tool', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'vetsenergy' ),
                'filter_items_list'     => _x( 'Filter Tools list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'vetsenergy' ),
                'items_list_navigation' => _x( 'Tools list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'vetsenergy' ),
                'items_list'            => _x( 'Tools list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'vetsenergy' ),
            );
            $args = array(
                'label'               => __( 'Tool Design', 'vetsenergy' ),
                'description'         => __( 'Tool Design', 'vetsenergy' ),
                'labels'              => $labels,
                'supports'           => array( 'title', 'editor','thumbnail'),
                'capability_type' 	  => 'page',
                'hierarchical'        => true,
                'public'              => true,
                'show_ui'             => true,
                'show_in_menu'        => "edit.php",
                'menu_position'       => 1,
                'menu_icon' 		  => 'dashicons-admin-tools' ,
                'show_in_admin_bar'   => true,
                'show_in_nav_menus'   => true,
                'can_export'          => true,
                'has_archive'         => true,
                'exclude_from_search' => true,
                'publicly_queryable'  => true,
                'rewrite'             => true,
                'taxonomies'          => array("category")
            );

            register_post_type("ami_post_tool", $args );
            function ami_add_link_box() {
                $screens = [ 'ami_post_tool', ];
                foreach ( $screens as $screen ) {
                    add_meta_box(
                        'link-tool',
                        'link',
                        'ami_add_custom_box_html',
                        $screen
                    );
                }
            }
            add_action( 'add_meta_boxes', 'ami_add_link_box' );
            function ami_add_custom_box_html( $post ) {
                $link = get_post_meta($post->ID, '_link_tool', true);
                ?>
                <div class="ami-metabox-output">
                    <div class="ami-metabox-item clearfix">
                        <div class="title">
                            <label  class="label" for="link-tool"><?php echo __("Link tải công cụ","vetsenergy")?></label>
                        </div>
                        <div  class="control">
                            <input style="height: 28px" class="textbox" id="link-tool" name="link-tool" value="<?php echo esc_url($link) ?>" >
                        </div>
                    </div>
                </div>
                <?php
            }
            function link_tool_save_postdata( $post_id ) {
                if ( array_key_exists( 'link-tool', $_POST ) ) {
                    update_post_meta(
                        $post_id,
                        '_link_tool',
                        $_POST['link-tool']
                    );
                }
            }
            add_action( 'save_post', 'link_tool_save_postdata' );
        }
    }

    new ami_register_Tool();
}