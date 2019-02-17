<?php
/**
 * 
 *
 * The template for displaying all pages
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

$size = "full";

get_header(); ?>
	<div class="about-image">
		<div id="primary" class="site-content">
			<div class="main-content " role="main">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; // end of the loop. ?>
			</div><!-- .main-content -->
		</div><!-- #primary -->
	</div>

	<div id="primary" class="site-content">
			<div class="main-content " role="main">
				<?php while ( have_posts() ) : the_post(); 
					$our_services = get_field('our_services');
					$our_services_description = get_field('our_services_description');
					$item_1_image = get_field('item_1_image');
					$item_1 = get_field('item_1');
					$item_1_description = get_field('item_1_description');
					$item_2 = get_field('item_2');
					$item_2_description = get_field('item_2_description');
					$item_2_image = get_field('item_2_image');
					$item_3_image = get_field('item_3_image');
					$item_3 = get_field('item_3');
					$item_3_description = get_field('item_3_description');
					$item_4 = get_field('item_4');
					$item_4_description = get_field('item_4_description');
					$item_4_image = get_field('item_4_image'); ?>
				<div>
					<h3><?php echo $our_services; ?></h3>
					<h4 class="center"><?php echo $our_services_description ?></h4>
				</div>
				<section class="about">
					
						<?php if($item_1_image) { 
						echo wp_get_attachment_image($item_1_image, $size);
						} ?>
					
					<div class="float-right">
						<h2><?php echo $item_1; ?></h2>
						<?php echo $item_1_description; ?>
					</div>
				</section>
				<section class="about">
					<div class="float-image-right">
						<?php if($item_2_image) { 
						echo wp_get_attachment_image($item_2_image, $size);
						} ?>
					</div>
					<div class="width">
						<h2><?php echo $item_2; ?></h2>
						<?php echo $item_2_description; ?>
					</div>
				</section>
				<section class="about margin-top">
					<?php if($item_3_image) { 
						echo wp_get_attachment_image($item_3_image, $size);
					} ?>
					<div class="float-right-2">
						<h2><?php echo $item_3; ?></h2>
						<?php echo $item_3_description; ?>
					</div>	
				</section>
				<section class="about margin-top-2">
					<div class="float-image-right">
						<?php if($item_4_image) { 
						echo wp_get_attachment_image($item_4_image, $size);
						} ?>
					</div>
					<div class="width">
						<h2><?php echo $item_4; ?></h2>
						<?php echo $item_4_description; ?>
					</div>	
				</section>

					<?php endwhile; // end of the loop. ?>
			</div><!-- .main-content -->
	</div><!-- #primary -->

	<nav id="navigation" class="container center about-nav">
    <p class="left left-about"><strong>Interested in working with us?</strong></p>
		<a class="button nav-button about-nav-button" href="<?php echo site_url('/contact/') ?>">Contact Us</a>
	</nav>
	

<?php get_footer(); ?>














