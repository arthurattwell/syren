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
