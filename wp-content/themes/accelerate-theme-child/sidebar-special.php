<?php
/**
 * The Sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */
?>

<aside class="sidebar">

	<div class="widget widget_search-form">
		<form role="search" method="get" class="search-form" action="">
			<input type="text" class="input" placeholder="search" value="" name="s">
			<input type="button" class="input-btn" value="">
		</form>
	</div>

	<div class="widget widget_categories">
		<h3 class="widget-title">Categories</h3>		
		<ul>
			<li><a href="">Books </a></li>
			<li><a href="">My Notes</a></li>
			<li><a href="">Photos</a></li>
			<li><a href="">Videos</a></li>
			<li><a href="">Quotes</a></li>
		</ul>
	</div>

	<div class="widget widget_archives">
		<h3 class="widget-title">Archives</h3>		
		<ul>
			<li><a href="">September 2014</a></li>
			<li><a href="">August 2014</a></li>
			<li><a href="">July 2014</a></li>
			<li><a href="">June 2014</a></li>
			<li><a href="">May 2014</a></li>
		</ul>
	</div>

	<div class="widget widget_events">
		<h3 class="widget-title">Events</h3>		
		<ul>
			<li><a href=""><img src="<?php echo home_url(); ?>/wp-content/uploads/2017/03/Event-1.png" alt=""></a></li>
			<li><a href=""><img src="<?php echo home_url(); ?>/wp-content/uploads/2017/03/Event-2.png" alt=""></a></li>
			<li><a href=""><img src="<?php echo home_url(); ?>/wp-content/uploads/2017/03/Event-3.png" alt=""></a></li>
		</ul>
	</div>

	<div class="widget widget_newsletter">
		<h3 class="widget-title">Newsletter Sign Up</h3>
		<?php echo do_shortcode('[mc4wp_form]'); ?>
	</div>
	
</aside>
