<?php

 
/**
 * Adds custom classes to the array of body classes.
 *
 * @since Shape 1.0
 */
function shape_body_classes( $classes ) {
    // Adds a class of group-blog to blogs with more than 1 published author
    if ( is_multi_author() ) {
        $classes[] = 'group-blog';
    }
 
    return $classes;
}
add_filter( 'body_class', 'shape_body_classes' );


?>