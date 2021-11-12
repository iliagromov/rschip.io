<?php

	define('RSCHIP_DIR_CSS', get_template_directory_uri() . '/css/');
	define('RSCHIP_DIR_JS', get_template_directory_uri() . '/js/');
	define('RSCHIP_DIR_LIBS', get_template_directory_uri() . '/libs/');
	define('RSCHIP_DIR_IMAGES', get_template_directory_uri() . '/assets/images/');


	include_once('includes/functions-modules/faq.php');
	include_once('includes/functions-modules/news.php');

	add_action('wp_enqueue_scripts', function () {
		// wp_enqueue_style('main', RS_DIR_CSS . 'styles.css');
		wp_enqueue_style('style', get_template_directory_uri()  . '/style.css');

		wp_localize_script( 'main', '_SERVER_DATA', array(
			'ajax_url'	=> admin_url( 'admin-ajax.php' )
		));

	});


	add_action('after_setup_theme', function () {
		add_theme_support('post-thumbnails');
		add_theme_support('title-tag');
		add_theme_support('post-formats', ['aside', 'video']);
		
	});


	add_action('widgets_init', function () {
		register_sidebar([
			'name'          => 'Телефон1',
			'id'            => 'phone-link1',
			'description'   => 'Выводится в шапке',
			'before_widget' => '<div class="page__link">',
			'after_widget'  => "</div>\n",
			'before_title'  => '',
			'after_title'   => "",
		]);
		register_sidebar([
			'name'          => 'Почта',
			'id'            => 'mail1',
			'description'   => 'Выводится в подвале сайта',
			'before_widget' => '<div class="page__text">',
			'after_widget'  => "</div>\n",
			'before_title'  => '',
			'after_title'   => "",
		]);

		register_sidebar([
			'name'          => 'Соц.сети',
			'id'            => 'footerSocial',
			'description'   => 'Выводится в подвале сайта',
			'before_widget' => '',
			'after_widget'  => "\n",
			'before_title'  => '',
			'after_title'   => "",
		]);
	});

	add_action('after_setup_theme', function () {
        register_nav_menu('headerNav', 'Header navigation');
        register_nav_menu('menuNav', 'Header menu mobile');
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