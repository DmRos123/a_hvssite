<?php
/**
 * 
 *
 *
 * Template Name: Industrial Contact Template
 * Description: Used as a contact page template to the Industrial Theme.
 * 
 * 
 * 
 */

add_action( 'genesis_loop', 'dmr_contact_loop' );

function dmr_contact_loop() {

  
                      
     if(function_exists('get_field')){     
     if (get_field('contact_page_address')) {
         echo '<div class="contact-page">';
         echo '<address>' . get_field('contact_page_address') . '</address>';
     
         echo '</div>';   
     }
     } 
}
                          
// Run the Genesis loop.
genesis();