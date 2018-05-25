<?php
/**
 * 
 *
 *
 * Template Name: Industrial Product Template
 * Description: Used as a product page template to the Industrial Theme.
 * 
 * 
 * 
 */

add_action( 'genesis_loop', 'dmr_products_loop' );

function dmr_products_loop() {
                      
     if(function_exists('get_field')){     
     if (get_field('info_box_content')) {
         echo '<div class="info-box">';
         echo '<h1>' . get_field('info_box_title') . '</h1>';
         the_field('info_box_content');
         
          $posts = get_field('related_posts');
           

          
    if( $posts ) {
        echo '<section class=related-list>';
        echo '<h1>Additional Leak Detectors:</h1>';
        echo '<ul>';

        foreach( $posts as $post ):
            setup_postdata($post); 
            echo '<li><a href="' . get_the_permalink() . '">';
            echo '<h3>' . the_title() . '</h3>';
            the_post_thumbnail();
            the_excerpt();
            echo '</a></li>';
        endforeach;
        echo '</ul>';
        wp_reset_postdata(); 
        echo '</section>';
     }
         
         echo '</div>';   
     }
     } 
}


                          
// Run the Genesis loop.
genesis();
