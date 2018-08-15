<?php

/* Template Name: Section Landing Children */
function tl_show_page_children(){
    ?><div class="product-card-group"><?php
    // get the child pages
    global $post;
    $args = array(
        'sort_order' => 'ASC',
        'sort_column' => 'menu_order',
        'hierarchical' => 0,
        'parent' => $post->ID
    );
    $child_pages = get_pages($args);
    foreach ($child_pages as $p){
        $post = $p;
        setup_postdata( $post ); 
        ?><div class="product-card">
            <a href="<?php the_permalink(); ?>"><?php
        the_post_thumbnail($size = 'thumbnail', array( 'class' => 'aligncenter' ));
        ?>
 
        <br /><h1><?php the_title(); ?></a></h1><?php
        

        ?></div><?php
    }
     ?></div><?php
}

add_action('genesis_loop', 'tl_show_page_children', 100);
genesis();