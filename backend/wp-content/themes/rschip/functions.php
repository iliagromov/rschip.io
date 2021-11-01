<?php

define('RS_DIR_CSS', get_template_directory_uri() . '/css/');


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
		'name'          => 'Телефон2',
		'id'            => 'phone-link2',
		'description'   => 'Выводится в подвале сайта',
		'before_widget' => '<div class="page__text_19">',
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
		'name'          => 'График работы',
		'id'            => 'works-hours1',
		'description'   => 'Выводится в шапке',
		'before_widget' => '<p class="page__text_sm">',
		'after_widget'  => "</p>\n",
		'before_title'  => '',
		'after_title'   => "",
	]);
	register_sidebar([
		'name'          => 'График работы',
		'id'            => 'works-hours2',
		'description'   => 'Выводится в подвале сайта',
		'before_widget' => '<div class="page__text">',
		'after_widget'  => "</div>\n",
		'before_title'  => '',
		'after_title'   => "",
	]);
	register_sidebar([
		'name'          => 'Соц.сети',
		'id'            => 'footer-social',
		'description'   => 'Выводится в подвале сайта',
		'before_widget' => '',
		'after_widget'  => "\n",
		'before_title'  => '',
		'after_title'   => "",
	]);
	register_sidebar([
		'name'          => 'Фильтр по Категориям',
		'id'            => 'filter-categories',
		'description'   => 'Фильтр товаров по Категориям',
		'before_widget' => '',
		'after_widget'  => "\n",
		'before_title'  => '',
		'after_title'   => "",
	]);
	register_sidebar([
		'name'          => 'Фильтр по Категориям mob',
		'id'            => 'filter-categories-mob',
		'description'   => 'Фильтр товаров по Категориям mob',
		'before_widget' => '',
		'after_widget'  => "\n",
		'before_title'  => '',
		'after_title'   => "",
	]);
});





add_action( 'after_setup_theme', 'mywoo_add_woocommerce_support' );
function mywoo_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}