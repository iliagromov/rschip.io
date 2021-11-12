<?php

define('RSCHIP_DIR_CSS', get_template_directory_uri() . '/css/');
define('RSCHIP_DIR_JS', get_template_directory_uri() . '/js/');
define('RSCHIP_DIR_LIBS', get_template_directory_uri() . '/libs/');
define('RSCHIP_DIR_IMAGES', get_template_directory_uri() . '/assets/images/');


function blank_scripts() {
    wp_localize_script( 'jquery', 'js_config', array(
        'ajax_url'	=> admin_url( 'admin-ajax.php' ),
        'ajax_nonce'	=> wp_create_nonce( 'ajax-nonce' ),
    ));
}
add_action( 'wp_enqueue_scripts', 'blank_scripts' );

add_action('wp_enqueue_scripts', function () {
	// wp_enqueue_style('main', RS_DIR_CSS . 'styles.css');
	wp_enqueue_style('style', get_template_directory_uri()  . '/style.css');
});

add_action('after_setup_theme', function () {
	add_theme_support('post-thumbnails');
	add_theme_support('title-tag');
	add_theme_support('post-formats', ['aside', 'video']);
	
	register_nav_menu('headerNav', 'Header navigation');
	register_nav_menu('menuNav', 'Header menu mobile');
	register_nav_menu('footerLinksItem1', 'Footer nav links 1');
	register_nav_menu('footerLinksItem2', 'Footer nav links 2');
});

add_action('init', function(){
	
	register_post_type('faq', [
		'labels' => [
			'name'               => 'Faq',
			'singular_name'      => 'Faq',
			'add_new'            => 'Add new',
			'add_new_item'       => 'Add new faq',
			'edit_item'          => 'Edit new faq',
			'new_item'           => 'New faq',
			'view_item'          => 'View faq',
			'search_items'       => 'Search faq',
			'not_found'          => 'Faq not found',
			'not_found_in_trash' => 'Faq not found in trash',
			'parent_item_colon'  => '',
			'menu_name'          => 'Faq'
		],
		'public' => true,
		'has_archive' => true,
		'rewrite' => [
			'with_front' => false
		]
	]);

	register_post_type('newsPostType', [
		'labels' => [
			'name'               => 'News',
			'singular_name'      => 'News',
			'add_new'            => 'Add new',
			'add_new_item'       => 'Add new news',
			'edit_item'          => 'Edit new news',
			'new_item'           => 'New news',
			'view_item'          => 'View news',
			'search_items'       => 'Search news',
			'not_found'          => 'News not found',
			'not_found_in_trash' => 'News not found in trash',
			'parent_item_colon'  => '',
			'menu_name'          => 'News'
		],
		'public' => true,
		'has_archive' => true,
		'rewrite' => [
			'with_front' => false
		]
	]);
	
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