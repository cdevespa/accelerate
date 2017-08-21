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
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>
	

	<div id="primary" class="home-page hero-content">
	  <section class="recent-posts">
 		  <div class="site-content">
 		  	<div class="blog-post">
 		  		<h2>From the Blog</h2>
 		  			<?php query_posts('posts_per_page=1'); ?>
     				<?php while ( have_posts() ) : the_post(); ?>
       			<h3><?php the_title(); ?><h3>
       				<?php the_excerpt(); ?> 
     			<?php endwhile; ?> 
    		<?php wp_reset_query(); ?>
 	      </div>
 	     </div>
	  </section>
	
		</div><!-- .main-content -->
	</div><!-- #primary -->

<?php get_footer(); ?>