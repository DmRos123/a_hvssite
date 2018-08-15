<?php

/* Template Name: Section Landing Children */
function tl_show_page_children(){
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
        ?><div class="pcard"><?php
        the_post_thumbnail($size = 'post-thumbnail', $attr = '');
        ?>
 
        <br /><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><?php
        
        the_excerpt(); 
        ?></div><?php
    }
}

add_action('genesis_loop', 'tl_show_page_children', 100);
genesis();