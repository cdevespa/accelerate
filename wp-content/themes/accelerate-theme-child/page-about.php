<?php
/**
 * Template Name: page-about
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

 	<section class="service-posts">
 		<div class="site-content">
 			<div class="services">
 				<h4>Our Services</h4>
        <p>We take pride in our clients and the content we create for them.<br>Here's a brief overview of our offered services.</p>
 					
 						
    					<?php query_posts('post_type=services'); ?> 
         				<?php while ( have_posts() ) : the_post();
							$service_image_1 = get_field("service_image_1");
                			$size="small"; ?>
           <section class="aboutpage-featured-services">
            <ul class="individual-services">
              <li class="children">
 							<figure class="service-images">
 				  		<?php 
   							echo wp_get_attachment_image($service_image_1, $size); 
   					 	?>
 						</figure>
 					<div>
   					  <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3><?php the_content();?>
 					</div>
				</li>
      </ul>
    </section>
						<?php endwhile; ?> 
       		
       	  
          			<?php wp_reset_query(); ?>
        </div>
  		</div>

  	



						<?php get_footer(); ?>