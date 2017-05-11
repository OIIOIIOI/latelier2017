<?php
/**
 * atelier functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package atelier
 */

if (!function_exists('atelier_setup')) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function atelier_setup ()
{
	load_theme_textdomain('atelier', get_template_directory().'/languages');

	add_theme_support('automatic-feed-links');
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');

	add_theme_support('html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	));

	add_theme_support('custom-background', apply_filters('atelier_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	)));

	add_theme_support('customize-selective-refresh-widgets');

    register_nav_menus(array(
        'menu-header' => esc_html__('Main Menu', 'atelier'),
        'menu-services' => esc_html__('Services Menu', 'atelier'),
    ));
}
endif;
add_action('after_setup_theme', 'atelier_setup');

function atelier_widgets_init ()
{
	register_sidebar(array(
		'name'          => esc_html__('Header Widget Area 1', 'atelier'),
        'description'   => esc_html__('Add widgets here.', 'atelier'),
        'id'            => 'header-1',
		'before_widget' => '<div class="fa fa-map-marker">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	));
	register_sidebar(array(
		'name'          => esc_html__('Header Widget Area 2', 'atelier'),
        'description'   => esc_html__('Add widgets here.', 'atelier'),
        'id'            => 'header-2',
        'before_widget' => '<div class="fa fa-clock-o">',
        'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	));
	register_sidebar(array(
		'name'          => esc_html__('Header Widget Area 3', 'atelier'),
        'description'   => esc_html__('Add widgets here.', 'atelier'),
        'id'            => 'header-3',
        'before_widget' => '<div class="fa fa-phone">',
        'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	));
}
add_action('widgets_init', 'atelier_widgets_init');

function atelier_scripts ()
{
	wp_enqueue_style('atelier-style', get_stylesheet_uri());
    wp_enqueue_style('gfonts-roboto-slab', 'https://fonts.googleapis.com/css?family=Oswald:700|Roboto:400,700&amp;subset=latin-ext');
    wp_enqueue_style('font-awesome', get_template_directory_uri().'/sass/font-awesome.min.css');
    wp_enqueue_style('atelier-main-style', get_template_directory_uri().'/sass/knacss.css');
}
add_action('wp_enqueue_scripts', 'atelier_scripts');

require get_template_directory().'/inc/walkers.php';
require get_template_directory().'/inc/custom-header.php';
require get_template_directory().'/inc/template-tags.php';
require get_template_directory().'/inc/extras.php';
require get_template_directory().'/inc/customizer.php';
require get_template_directory().'/inc/jetpack.php';
