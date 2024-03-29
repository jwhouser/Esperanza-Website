<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:800' rel='stylesheet' type='text/css'>

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_enqueue_script('jquery'); ?>
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed">
	<header id="branding" role="banner">
			<div id="espbanner">
				<div id="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><div id="logospan"></div></a></div>
				<div class="headerbutton donatebutton"><a href="<?php echo esc_url( home_url( '/' ) ); ?>?page_id=3076">DONATE</a></div>
				<div class="headerbutton espanol">
					<div id="google_translate_element"></div><script>
					function googleTranslateElementInit() {
					  new google.translate.TranslateElement({
					    pageLanguage: 'en',
					    includedLanguages: 'en,es',
					    layout: google.translate.TranslateElement.InlineLayout.SIMPLE
					  }, 'google_translate_element');
					}
					</script><script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
				</div>
				<div class="headerbutton fbbutton"><div id="fb-root"></div><script src="http://connect.facebook.net/en_US/all.js#appId=209824579078042&amp;xfbml=1"></script><fb:like href="http://www.facebook.com/pages/Esperanza-Community-Housing-Corporation/39274644856" send="false" width="100" show_faces="false" font=""></fb:like></div>
			</div>
			<nav id="access" role="navigation">
				<h3 class="assistive-text"><?php _e( 'Main menu', 'twentyeleven' ); ?></h3>
				<?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff. */ ?>
				<div class="skip-link"><a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to primary content', 'twentyeleven' ); ?>"><?php _e( 'Skip to primary content', 'twentyeleven' ); ?></a></div>
				<div class="skip-link"><a class="assistive-text" href="#secondary" title="<?php esc_attr_e( 'Skip to secondary content', 'twentyeleven' ); ?>"><?php _e( 'Skip to secondary content', 'twentyeleven' ); ?></a></div>
				<?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu. The menu assiged to the primary position is the one used. If none is assigned, the menu with the lowest ID is used. */ ?>
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav><!-- #access -->
			
			<!-- Check for Home page slideshow -->
			
			
			<?php if ( is_front_page()): ?>
				<?php dynamic_content_gallery(); ?>
			<?php else : ?>
				<?php
					// Check to see if the header image has been removed
					$header_image = get_header_image();
					if ( ! empty( $header_image ) ) :
				?>
				<div id="image_header">
	
					<?php
						// The header image
						// Check if this is a post or page, if it has a thumbnail, and if it's a big one
						if ( is_singular() &&
								has_post_thumbnail( $post->ID ) &&
								( /* $src, $width, $height */ $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), array( HEADER_IMAGE_WIDTH, HEADER_IMAGE_WIDTH ) ) ) &&
								$image[1] >= HEADER_IMAGE_WIDTH ) :
							// Houston, we have a new header image!
							echo get_the_post_thumbnail( $post->ID, 'post-thumbnail' );
						else : ?>
	
						<img src="<?php header_image(); ?>" width="<?php echo HEADER_IMAGE_WIDTH; ?>" height="<?php echo HEADER_IMAGE_HEIGHT; ?>" alt="" />			
					<?php endif; // end check for featured image or standard header ?>
	
				<div id="image_title"><?php echo get_the_title(); ?></div>
				</div> <!-- Image Header -->	
				<?php endif; // end check for removed header image ?>
			<?php endif; ?> <!-- end check for homepage -->
			<!-- Text hidden -->
			<?php
				// Has the text been hidden?
				if ( 'blank' == get_header_textcolor() ) :
			?>
				<div class="only-search<?php if ( ! empty( $header_image ) ) : ?> with-image<?php endif; ?>">
				<?php // get_search_form(); ?>
				</div>
			<?php
				else :
			?>
				<?php // get_search_form(); ?>
			<?php endif; ?>
			
	</header><!-- #branding -->


	<div id="main">
