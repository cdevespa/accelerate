<?php
/**
 * Template Name: page_about
 * The template for displaying about page
 * This is the template that displays the about page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>
		<div id="primary" class="about-page hero-content">
        	<div class="main-content" role="main">
        		
        		<?php while ( have_posts() ) : the_post(); ?>
              
     			

     		

       			<?php the_content(); ?>
       
     			<?php endwhile; // end of the loop. ?>
     			
   			</div><!-- .main-content -->
 		</div><!-- #primary -->

				<?php get_footer(); ?>