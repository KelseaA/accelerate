<?php
/**
 * The template for displaying the 404 page
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

	<div id="primary" class="site-content">
		<div id="content" class="page-content" role="main">
			<div class="main-404">
				<img class="map-404" src="<?php echo home_url(); ?>/wp-content/uploads/2017/03/map.png" alt="Image of Map">
				<div class="text-404">
					<h2 class="green">Whoops, Took a Wrong Turn...</h2>
					<p>Sorry this page no longer exists, never existed, or has been moved. We feel like complete jerks for totally misleading you.</p>
					<p>Feel free to take a look around our 
						<a class="green bold" href="<?php echo home_url(); ?>/blog">blog</a> 
						or some of our featured 
						<a class="green bold" href="<?php echo home_url(); ?>/case-studies">work</a>.
					</p>
				</div>
			</div>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>