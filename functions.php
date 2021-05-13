<?php

wp_enqueue_style('style123', get_theme_file_uri('style.css'));

add_theme_support('post-thumbnails');

function custom_excerpt_length(){
    return 40;
}

add_filter('excerpt_length', 'custom_excerpt_length');

?>