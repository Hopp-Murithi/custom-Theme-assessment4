<?php

function custom5_enqueue_script(){
wp_enqueue_style('customStyle',get_template_directory_uri().'./custom/custom.css',[],'1.0.0','all');
wp_enqueue_script('customjs', get_template_directory_uri().'./custom/custom.js',[], '1.0.0',true);
}

//This is firing the custom style and script. 
add_action('wp_enqueue_scripts', 'custom5_enqueue_script');


 add_theme_support('custom-header');
 

 add_theme_support('post-formats',['aside', 'image', 'video', 'quote', 'gallery']);

add_theme_support('custom-background');
add_theme_support('post-thumbnails');

