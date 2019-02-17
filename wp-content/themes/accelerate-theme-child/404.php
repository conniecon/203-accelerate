<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<div class="error-image">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/map-image.jpg"/>
			</div>
			<div class="page-content">
				<h1 class="page-title"><?php _e( 'Whoops, Took a Wrong Turn...', 'Accelerate' ); ?></h1>
			
				<p><?php _e( 'Sorry, this page no longer exists, never existed or has<br> been moved. We feel like complete jerks for totally<br> misleading you.', 'Accelerate' ); ?></p>
				<p><?php _e( 'Feel free to take a look around our <span>blog</span> or some of our<br> featured <span>work</span>', 'Accelerate' ); ?></p>

			</div><!-- .page-content -->
			

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>