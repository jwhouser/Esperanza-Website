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

	<div id="home-wrap">

		<div id="calendar-title">UPCOMING <span class="calendar-title-suffix">EVENTS</span></div>
		<div id="primary-home">
			<div id="content-home" role="main">	
	
			<?php echo do_shortcode('[google-calendar-events id="1, 3" type="list" title="" max="5"]'); ?>
			
			</div><!-- #content -->
			<div id="calendar-all"><a href="#">SEE ALL</a></div>
		</div><!-- #primary -->
	</div><!-- #home-wrap -->
	
<?php get_sidebar('home'); ?>
<?php get_footer(); ?>