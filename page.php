<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">

				<?php the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

			</div><!-- #content -->
		</div><!-- #primary -->
<!-- Get Parent ID -->
<?php

if ($post->post_parent) {
        $ancestors=get_post_ancestors($post->ID);
        $root=count($ancestors)-1;
        $parent = $ancestors[$root];
}
else {
        $parent = $post->ID;
}
$parent_title = get_the_title($parent);
?>

<!-- Set side menu -->
<div id="side-menu-title"><?php echo $parent_title ?></div>
<?php 
if (wp_get_nav_menu_object($parent_title)) {
	wp_nav_menu( array( 'menu' => $parent_title, 'container_id' => 'side-menu' ) );
}
else {
	wp_nav_menu( array( 'menu' => 'Primary Menu', 'container_id' => 'side-menu' ) );
}

?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>