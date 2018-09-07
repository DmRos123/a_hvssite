<?php

add_action( 'genesis_meta', 'my_homepage_setup' );
/**
 * Add widget support for homepage.
 *
 */
function my_homepage_setup() {
    
    $home_sidebars = array(
        'front_page_1'  => is_active_sidebar( 'front-page-1'),
        'front_page_2'  => is_active_sidebar( 'front-page-2'),
        'front_page_3'  => is_active_sidebar( 'front-page-3'),
    );

	if ( $home_sidebars['front_page_1'] )  {

		 //* Add front page 1 widget
		add_action( 'genesis_after_header', 'display_front_page_1_widget' );

	}
    if ( $home_sidebars['front_page_2']  )  {

		 //* Add front page 2 widget
		add_action( 'genesis_after_header', 'display_front_page_2_widget' );

	}
    if ( $home_sidebars['front_page_3']  )  {

		 //* Add front page 3 widget
		add_action( 'genesis_before_footer', 'display_front_page_3_widget', 5 );

	}
}

// Add markup to display front page widgets.
function display_front_page_1_widget() {

	genesis_widget_area( 'front-page-1', array(
		'before' => '<div class="front-page-1-widget"><div class="wrap">',
		'after'  => '</div></div>',
	) );

}
function display_front_page_2_widget() {

	genesis_widget_area( 'front-page-2', array(
		'before' => '<div class="front-page-2-widget"><div class="wrap">',
		'after'  => '</div></div>',
	) );

}
function display_front_page_3_widget() {

	genesis_widget_area( 'front-page-3', array(
		'before' => '<div class="front-page-3-widget"><div class="wrap">',
		'after'  => '</div></div>',
	) );

}



genesis();