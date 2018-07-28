<?php
function job(){
    wp_enqueue_style('style', get_template_directory_uri() .'/style.css',  array(),'1.0','all' );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/main.js', array (), '1.0', 'true');
    wp_enqueue_style('bootstrap-style', get_template_directory_uri() .'/bootstrap/css/bootstrap.css',  array(),'1.0','all' );
    wp_enqueue_style('bootstrap-style', get_template_directory_uri() .'/bootstrap/js/bootstrap.js',  array(),'1.0','all' );
}
add_action('wp_enqueue_scripts','job');
?>