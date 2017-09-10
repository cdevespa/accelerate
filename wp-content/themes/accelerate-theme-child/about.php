<?php
/**
 * Template Name: sevices
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
 				
 					<ul class="aboutpage-featured-services">
    			<?php query_posts('posts_per_page=4&post_type=services'); ?>
         		<?php while ( have_posts() ) : the_post();
					
                	$image_1 = get_field("image_1");
                	$size="medium"; ?>

                
             
             
        <li class="individual-featured-services">
          <figure>
            <?php echo wp_get_attachment_image($image_1, $size); ?>
          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          </figure>
        </li>
        
         <?php endwhile; ?> 
       <?php wp_reset_query(); ?>

    </ul>
  </div>
  </div>
  </section>

				<?php get_footer(); ?>