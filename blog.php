<?php
/**
 * Template Name: Blog
 *
 * @package WordPress
 * @subpackage Basis_Theme
 */
get_header(); ?>

		<div id="primary">
			<div id="content" role="main">

				<?php
					$temp = $wp_query;
					$wp_query= null;
					$wp_query = new WP_Query();
					$wp_query->query('showposts=5'.'&paged='.$paged);
					while ($wp_query->have_posts()) : $wp_query->the_post();
				?>

					<?php get_template_part( 'content', get_post_format() ); ?>

				<?php endwhile; ?>
				<?php twentyeleven_content_nav( 'nav-below' ); ?>
			<?php $wp_query = null; $wp_query = $temp;?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>