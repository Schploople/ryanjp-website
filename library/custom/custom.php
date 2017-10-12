<?php

// https://developer.wordpress.org/reference/functions/add_image_size/
// This will create 2 new image sizes for WordPress to use. 
add_action( 'after_setup_theme', 'wpdocs_theme_setup' );
function wpdocs_theme_setup() {
    add_image_size( 'category-thumb', 300 ); // 300 pixels wide (and unlimited height)
    add_image_size( 'homepage-thumb', 450, 225, true ); // (cropped)
}

// http://ghosthorses.co.uk/production-diary/adding-cropping-support-for-wordpress-medium-thumbs/
// This will force medium to hard crop using WordPress's media sizes that can be changed in the backend of WordPress. I use this often. - Jared
if(!get_option("medium_crop"))
add_option("medium_crop", "1");
else
update_option("medium_crop", "1");

// Configure WordPress Default Media Sizes in the WP Backend. -->Settings-->Media