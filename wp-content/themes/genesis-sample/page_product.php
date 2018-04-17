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

//Add our custom loop
add_action( 'genesis_loop', 'dmr_products_loop' );


function dmr_products_loop() {
	
	$args = array(
	''
	); 
}

// Run the Genesis loop.
genesis();
