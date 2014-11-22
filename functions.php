<?php 
/* Redefine the header image width and height ********************************************/
define( 'HEADER_IMAGE_WIDTH', apply_filters( 'twentyten_header_image_width', 1000 ) );
define( 'HEADER_IMAGE_HEIGHT', apply_filters( 'twentyten_header_image_height', 345 ) );

// Remove a barra de atualizaחדo do Admin
add_filter( 'pre_site_transient_update_core', create_function( '$a', "return null;" ) );

?>