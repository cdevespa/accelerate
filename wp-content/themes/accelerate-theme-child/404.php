<?php get_header(); ?>
 
<div id="main-content">
    <?php dynamic_sidebar( '404' ); ?>
    <div class="fourofour-container">
        <div id="content-area" class="clearfix">
            <div id="left-area">          
                <article id="post-0" <?php post_class( 'et_pb_post not_found' ); ?>>
                    <h1><?php esc_html_e('OOPS!!! You lost it!','Divi'); ?></h1>
                    <p><?php esc_html_e('Looks like the page you were looking for doesn\'t exist. Try searching for something else using the search bar below.', 'Divi'); ?></p>
                    <div class="search-form">
                        <?php get_search_form(); ?>
                    </div>  
                </article> <!-- .et_pb_post -->
            </div> <!-- #left-area -->
        </div> <!-- #content-area -->
    </div> <!-- .container -->
</div> <!-- #main-content -->
  
<?php get_footer(); ?>


