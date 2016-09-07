<?php
/**
 * Syren functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Syren
 */

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function syren_widgets_init() {
  register_sidebar( array(
    'name'          => esc_html__( 'Sidebar', 'syren' ),
    'id'            => 'sidebar',
    'description'   => esc_html__( 'Add widgets here.', 'syren' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ) );
}
add_action( 'widgets_init', 'syren_widgets_init' );

/**
 * Disable Wordpress's daft emoji scripts.
 *
 * @link http://wordpress.stackexchange.com/a/185578
 */

function disable_wp_emojicons() {

  // all actions related to emojis
  remove_action( 'admin_print_styles', 'print_emoji_styles' );
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
  remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
  remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );

  // filter to remove TinyMCE emojis
  add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );
}
add_action( 'init', 'disable_wp_emojicons' );

function disable_emojicons_tinymce( $plugins ) {
  if ( is_array( $plugins ) ) {
    return array_diff( $plugins, array( 'wpemoji' ) );
  } else {
    return array();
  }
}

/**
 * Support HTML for the search form
 *
 * @link http://buildwpyourself.com/wordpress-search-form-template/
 */

add_theme_support( 'html5', array( 'search-form' ) );


add_filter( 'wp_title', 'syren_title_for_home' );
 
/**
 * Customize the title for the home page, if one is not set.
 * https://developer.wordpress.org/reference/functions/wp_title/
 *
 * @param string $title The original title.
 * @return string The title to use.
 */
function syren_title_for_home( $title )
{
  if ( empty( $title ) && ( is_home() || is_front_page() ) ) {
    $title = get_bloginfo( 'title' );
  }
  return $title;
}
