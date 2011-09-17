<?php
/**
 * The Sidebar containing the main widget area.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

?>
		<div id="secondary" class="widget-area" role="complementary">

			<?php if ( !function_exists('dynamic_sidebar') ||
			           !dynamic_sidebar('Home Sidebar') ) : ?>
			  <!-- This will be displayed if the sidebar is empty -->
			<?php endif; ?>

		</div><!-- #secondary .widget-area -->
