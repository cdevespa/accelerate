<?php
/**
 * Template Name: About
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
     	<?php while ( have_posts() ) : the_post(); 
     		$services = get_field('services');
            $content_strategy = get_field('content_strategy');
            $influencer_mapping = get_field('influencer_mapping');
            $social_media_strategy = get_field('social_media_strategy');
            $design_and_development = get_field('design_and_development');
            $image_1 = get_field('image_1');
            $size="medium"; ?>

      <section class="about-page-info">
		
		<div>
			<?php if($image_1){
                        echo wp_get_attachment_image($image_1, $size);
                    } ?>   
        </div>
				<article class="about">
              <aside class="about-sidebar">
                
                <h4><?php echo $services; ?></h4>
                <h5><?php echo $content_strategy; ?></h5>
                <h6><?php echo $influencer_mapping; ?></h6>
                <h7><?php echo $social_media_strategy; ?></h7>
                <h8><?php echo $design_and_development; ?></h8>
              </aside>
             </article>

       <?php the_content(); ?>
       
     <?php endwhile; // end of the loop. ?>
   </div><!-- .main-content -->
 </div><!-- #primary -->

	<?php get_footer(); ?>