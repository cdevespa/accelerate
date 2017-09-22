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

        <div class="services-intro">
          <h4>Our Services</h4>
          <p>We take pride in our clients and the content we create for them.<br>Here's a brief overview of our offered services.</p>
        </div>
          
        <?php query_posts('post_type=services'); ?> 
          <?php while ( have_posts() ) : the_post();
          $service_image_1 = get_field("service_image_1");
          $size="small"; ?>
              
          <div class="service-types">
            <figure>
              <?php echo wp_get_attachment_image($service_image_1, $size); ?>
            </figure>
            <div class="service-content">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php the_content(); ?>
            </div>
          </div>
  
        <?php endwhile; ?>  
        <?php wp_reset_query(); ?>
                
       </div><!-- .services -->
    </div><!-- .site-content -->
  </section>

  

  <?php get_footer(); ?>