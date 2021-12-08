<?php

	define('RSCHIP_DIR_CSS', get_template_directory_uri() . '/css/');
	define('RSCHIP_DIR_JS', get_template_directory_uri() . '/js/');
	define('RSCHIP_DIR_LIBS', get_template_directory_uri() . '/libs/');
	define('RSCHIP_DIR_IMAGES', get_template_directory_uri() . '/assets/images/');


	include_once('includes/functions-modules/faq.php');
	include_once('includes/functions-modules/news.php');
	include_once('includes/functions-modules/shared.php');

	add_action('wp_enqueue_scripts', function () {
		// wp_enqueue_style('main', RS_DIR_CSS . 'styles.css');
		wp_enqueue_style('style', get_template_directory_uri()  . '/style.css');

		wp_localize_script( 'main', '_SERVER_DATA', array(
			'ajax_url'	=> admin_url( 'admin-ajax.php' )
		));

	});


	add_action('init', 'do_rewrite', 20, 0);

	//page brand id 336
	//page model id 338
	//page shop id 250
	function do_rewrite(){
		global $wp_rewrite;
		add_rewrite_rule( '^shop/(.+)/(.+)/(.+)', 'index.php?page_id=250&brand=$matches[1]&model=$matches[2]&modification=$matches[3]', 'top' );
		add_rewrite_rule( '^shop/(.+)/(.+)', 'index.php?page_id=338&brand=$matches[1]&model=$matches[2]', 'top' );
		add_rewrite_rule( '^shop/(.+)', 'index.php?page_id=336&brand=$matches[1]', 'top' );

		add_filter( 'query_vars', function( $vars ){
			$vars[] = 'brand';
			$vars[] = 'model';
			$vars[] = 'modification';
			return $vars;
		} );

		// $GLOBALS['wp_rewrite']->flush_rules();

		global $wp_rewrite;
		$wp_rewrite->flush_rules();
	}


	add_action('after_setup_theme', function () {
		add_theme_support('post-thumbnails');
		add_theme_support('title-tag');
		add_theme_support('post-formats', ['aside', 'video']);
		
	});

	add_filter( 'upload_mimes', 'svg_upload_allow' );

	# Добавляет SVG в список разрешенных для загрузки файлов.
	function svg_upload_allow( $mimes ) {
		$mimes['svg']  = 'image/svg+xml';
	
		return $mimes;
	}
	add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );

# Исправление MIME типа для SVG файлов.
function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){

	// WP 5.1 +
	if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) )
		$dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
	else
		$dosvg = ( '.svg' === strtolower( substr($filename, -4) ) );

	// mime тип был обнулен, поправим его
	// а также проверим право пользователя
	if( $dosvg ){

		// разрешим
		if( current_user_can('manage_options') ){

			$data['ext']  = 'svg';
			$data['type'] = 'image/svg+xml';
		}
		// запретим
		else {
			$data['ext'] = $type_and_ext['type'] = false;
		}

	}

	return $data;
}

	add_action('widgets_init', function () {
		

		

		register_sidebar([
			'name'          => 'Social',
			'id'            => 'footer-social',
			'description'   => '',
			'before_widget' => '',
			'after_widget'  => "\n",
			'before_title'  => '',
			'after_title'   => "",
		]);

		register_sidebar([
			'name'          => 'Footer Advantages Item 1',
			'id'            => 'footer-advantages-item1',
			'description'   => '',
			'before_widget' => '',
			'after_widget'  => "\n",
			'before_title'  => '',
			'after_title'   => "",
		]);
		register_sidebar([
			'name'          => 'Footer Advantages Item 2',
			'id'            => 'footer-advantages-item2',
			'description'   => '',
			'before_widget' => '',
			'after_widget'  => "\n",
			'before_title'  => '',
			'after_title'   => "",
		]);
		register_sidebar([
			'name'          => 'Footer Advantages Item 3',
			'id'            => 'footer-advantages-item3',
			'description'   => '',
			'before_widget' => '',
			'after_widget'  => "\n",
			'before_title'  => '',
			'after_title'   => "",
		]);

		
	});

	add_action('after_setup_theme', function () {
        register_nav_menu('headerNav', 'Header navigation');
        register_nav_menu('menuNav', 'Header menu mobile');
        register_nav_menu('footerNav', 'Footer links privacy');
        register_nav_menu('footerLinksItem1', 'Footer nav links 1');
        register_nav_menu('footerLinksItem2', 'Footer nav links 2');
    });

	function wp_nav_custom_menu($menu_name, $link_class_name) {
		// $menu_name = 'nav-primary'; // specify custom menu name $marker="icon-heart"
		if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
			$menu = wp_get_nav_menu_object($locations[$menu_name]);
			$menu_items = wp_get_nav_menu_items($menu->term_id);
		
			$menu_list = '' ."\n";
			foreach ((array) $menu_items as $key => $menu_item) {
				
				$title = $menu_item->title;
				$url = $menu_item->url;
				$menu_list .= "\t\t\t\t\t". '<a class="'.$link_class_name.'" href="'. $url .'">'. $title .'</a>' ."\n";
				
				
			}
		} else {
			// $menu_list = '<!-- no list defined -->';
		}
		echo $menu_list;
	}



	add_action( 'after_setup_theme', 'mywoo_add_woocommerce_support' );
	function mywoo_add_woocommerce_support() {
		add_theme_support( 'woocommerce' );
	}

	function wsb_add_to_cart_button( ) {
		global $product;
	
		$classes = implode( ' ',  array(
			'button',
			'product_type_' . $product->get_type(),
			$product->is_purchasable() && $product->is_in_stock() ? 'add_to_cart_button' : '',
			$product->supports( 'ajax_add_to_cart' ) ? 'ajax_add_to_cart' : '',
		)  );
	
		return apply_filters( 'woocommerce_loop_add_to_cart_link',
			sprintf( '<a href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" data-quantity="%s" class="page__btn page__btn_notTransparent">ADD TO BAG</a>',
				esc_url( $product->add_to_cart_url() ),
				esc_attr( $product->get_id() ),
				esc_attr( $product->get_sku() ),
				esc_attr( isset( $quantity ) ? $quantity : 1 ),
				esc_attr( isset( $classes ) ? $classes : 'button' ),
				esc_attr( $product->get_type() ),
				esc_html( $product->add_to_cart_text() )
			),
		$product );
	} 