<?php
/**
 * The template for displaying the about page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>
	<section class="about-page">
		<div id="about-primary" class="site-content">
			<div id="about-content" class="page-content" role="main">
				<?php while ( have_posts() ) : the_post(); ?>
					
					<div class="about-main-content">
						<?php the_content();?>
						
						<?php
						$size = "full";
						$title_1 = get_field('title_1');
						$title_2 = get_field('title_2');
						$title_3 = get_field('title_3');
						$title_4 = get_field('title_4');
						$image_1 = get_field('image_1');
						$image_2 = get_field('image_2');
						$image_3 = get_field('image_3');
						$image_4 = get_field('image_4');
						$services_1 = get_field('services_description_1');
						$services_2 = get_field('services_description_2');
						$services_3 = get_field('services_description_3');
						$services_4 = get_field('services_description_4');?>


						<div class="about-services">
							<div class="about-individual-service">
								<div class="title-description">
									<h2><?php echo $title_1; ?></h2>
									<p><?php echo $services_1; ?></p>
								</div>
								<?php if($image_1) {
									echo wp_get_attachment_image( $image_1, $size );
								} ?>
							</div>
							<div class="about-individual-service">
								<div class="title-description">
									<h2><?php echo $title_2; ?></h2>
									<p><?php echo $services_2; ?></p>
								</div>
								<?php if($image_2) {
									echo wp_get_attachment_image( $image_2, $size );
								} ?>
							</div>
							<div class="about-individual-service">
								<div class="title-description">
									<h2><?php echo $title_3; ?></h2>
									<p><?php echo $services_3; ?></p>
								</div>
								<?php if($image_3) {
									echo wp_get_attachment_image( $image_3, $size );
								} ?>
							</div>
							<div class="about-individual-service">
								<div class="title-description">
									<h2><?php echo $title_4; ?></h2>
									<p><?php echo $services_4; ?></p>
								</div>
								<?php if($image_4) {
									echo wp_get_attachment_image( $image_4, $size );
								} ?>
							</div>
						</div>
					</div>
				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->
	</section><!-- .about-page -->

<?php get_footer(); ?>
