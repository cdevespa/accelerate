<?php get_header(); ?>
 
<div id="main-content">
    <div class="fourofour-container">
        <div id="content-area" class="clearfix">
            <?php dynamic_sidebar( '404' ); ?>
            <div id="left-area">
            <img title="404 Page Image" src="http://yoursite.com/images/404.png" alt="404 Not Found" />

                        
                <article id="post-0" <?php post_class( 'et_pb_post not_found' ); ?>>
                    <h1><?php esc_html_e('OOPS!!! You lost it!','Divi'); ?></h1>
                    <p><?php esc_html_e('Looks like the page you were looking for doesn\'t exit. Try searching for something else using the search bar above', 'Divi'); ?></p>
                    
                </article> <!-- .et_pb_post -->
                
            </div> <!-- #left-area -->

        </div> <!-- #content-area -->
    </div> <!-- .container -->
</div> <!-- #main-content -->
 
<?php get_footer(); ?>


