<?php
/**
 * The template for displaying the homepage
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
<section class="home-page">
	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='homepage-hero'>
				<?php the_content(); ?>
				<a class="button" href="<?php echo the_permalink(); ?>/case-studies">View Our Work</a>
			</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .container -->
</section><!-- .home-page -->

<section class="featured-work">
    <div class="site-content">
        <h4>Featured Work</h4>

        <ul class="homepage-featured-work">
            <?php query_posts('posts_per_page=3&post_type=case_studies'); ?>

            <?php while ( have_posts() ) : the_post();
                $image_1 = get_field('image_1');
                $size = "medium";
            ?>
                <li class="individual-featured-work">
                    <figure>
                        <?php echo wp_get_attachment_image($image_1, $size); ?>
                    </figure>
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                </li>

            <?php endwhile; ?> 
            <?php wp_reset_query(); ?>
        </ul>
    </div>
</section>

<section class="services">
    <div class="site-content">
        <h4>Our Services</h4>
        <ul class="homepage-services">
            <?php query_posts('posts_per_page=4&post_type=page&pagename=about'); ?>

            <?php while ( have_posts() ) : the_post();
                $title_1 = get_field('title_1');
                $title_2 = get_field('title_2');
                $title_3 = get_field('title_3');
                $title_4 = get_field('title_4');
                $image_1 = get_field('image_1');
                $image_2 = get_field('image_2');
                $image_3 = get_field('image_3');
                $image_4 = get_field('image_4');
                $size = "medium";
            ?>
                <li class="individual-service">
                    <figure>
                        <?php echo wp_get_attachment_image($image_1, $size); ?>
                    </figure>
                    <h3><a href="<?php the_permalink(); ?>"><?php echo $title_1; ?></a></h3>
                </li>
                <li class="individual-service">
                    <figure>
                        <?php echo wp_get_attachment_image($image_2, $size); ?>
                    </figure>
                    <h3><a href="<?php the_permalink(); ?>"><?php echo $title_2; ?></a></h3>
                </li>
                <li class="individual-service">
                    <figure>
                        <?php echo wp_get_attachment_image($image_3, $size); ?>
                    </figure>
                    <h3><a href="<?php the_permalink(); ?>"><?php echo $title_3; ?></a></h3>
                </li>
                <li class="individual-service">
                    <figure>
                        <?php echo wp_get_attachment_image($image_4, $size); ?>
                    </figure>
                    <h3><a href="<?php the_permalink(); ?>"><?php echo $title_4; ?></a></h3>
                </li>

            <?php endwhile; ?> 
            <?php wp_reset_query(); ?>
        </ul>
    </div>
</section>

<section class="recent-posts">
    <div class="site-content">
        <div class="blog-post">
            <h4>From the Blog</h4>
            <?php query_posts('posts_per_page=1'); ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <h2><?php the_title(); ?></h2>
                <?php the_excerpt(); ?> 
                <a class="read-more-link" href="<?php the_permalink(); ?>">Read More <span>&rsaquo;</span></a>
            <?php endwhile; ?> 
            <?php wp_reset_query(); ?>
        </div>
    </div>
</section>

<div class="site-content">
    <?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
        <div id="secondary" class="widget-area" role="complementary">
            <?php dynamic_sidebar( 'sidebar-2' ); ?>
            <a class="read-more-link" href="https://twitter.com/skillcrush" target="_blank">Follow Us <span>&rsaquo;</span></a>
        </div>
    <?php endif; ?>
</div>

<?php get_footer(); ?>