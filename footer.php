<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	</div><!-- #main -->


	
	<footer id="colophon" role="contentinfo">
		<div id="mercado">
			<div id="wrap">
				<div>
					<a href="http://www.mercadolapaloma.com/" target="_blank"><img src="./wp-content/themes/twentyeleven-child/images/img1.jpg"></img></a>
					<a href="http://www.mercadolapaloma.com/" target="_blank"><img src="./wp-content/themes/twentyeleven-child/images/img2.jpg"></img></a>
					<a href="http://www.mercadolapaloma.com/" target="_blank"><img src="./wp-content/themes/twentyeleven-child/images/img3.jpg"></img></a>
				</div>
				<div id="mercadotext">
					<a href="http://www.mercadolapaloma.com/" target="_blank"><h1 style="display:inline;">MERCADO LA PALOMA</h1></a>
					<span style="display:block;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin interdum vehicula velit in fermentum.</span>
					<a href="http://www.mercadolapaloma.com/" target="_blank">LEARN MORE</a>
				</div>
			</div><!-- #wrap -->
		</div><!-- #mercado -->
		<div id="wrap">
			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				get_sidebar( 'footer' );
			?>

			<div id="site-generator">
				<span> &#9400; 2001 - 2011 Esperanza Community Housing Corporation.  All rights Reserved | </span>
				<?php do_action( 'twentyeleven_credits' ); ?>
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentyeleven' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentyeleven' ); ?>" rel="generator" target="_blank"><?php printf( __( 'Proudly powered by %s', 'twentyeleven' ), 'WordPress' ); ?></a>
			</div><!-- #site-generator -->
		</div><!-- #wrap -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>