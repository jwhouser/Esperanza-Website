<?php
/**
 * Get our wp_nav_menu() fallback, wp_page_menu(), to remove home link.
 */
function remove_home( $args ) {
	remove_filter('wp_page_menu_args', 'twentyeleven_page_menu_args');
	$args['show_home'] = false;
	return $args;
}
add_action('after_setup_theme', 'remove_home');

register_sidebar(array(	'name' => 'Home Sidebar',
			'id' => 'sidebar-6'));

?>