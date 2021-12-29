<?php
/**
 * Remove standard image sizes
 */
add_filter( 'intermediate_image_sizes_advanced', 'er_dreams_remove_default_images' );

// This will remove the default image sizes and the medium_large size. 
function er_dreams_remove_default_images( $sizes ) {
 unset( $sizes['small']); // 150px
 unset( $sizes['medium']); // 300px
 unset( $sizes['large']); // 1024px
 unset( $sizes['medium_large']); // 768px
 return $sizes;
}