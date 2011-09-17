<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 */

get_header(); ?>

		<div id="primary">

			<div id="calender_title">UPCOMING EVENTS</div>
			<div id="content_home" role="main">
			

			<?php echo do_shortcode('[google-calendar-events id="1, 3" type="list" title="Events on" max="10"]'); ?>

			</div><!-- #content -->
		</div><!-- #primary -->
		
<?php get_sidebar('home'); ?>
<?php get_footer(); ?>