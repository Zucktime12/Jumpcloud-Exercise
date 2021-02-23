<?php

add_action('wp_enqueue_scripts', 'load_scripts');
function load_scripts(){
    //Load scripts:
    wp_enqueue_script( 'ajax', get_stylesheet_directory_uri() . '/js/scripts.js', array('jquery') );
    wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ) );
    wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'parent-style', get_template_directory_uri() .'/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_uri() );
    wp_enqueue_script( 'child-script', get_stylesheet_directory_uri() . '/js/scripts.js', array('jquery') );

    wp_localize_script('ajax' , 'wpAjax',
        array('ajaxUrl' => admin_url('admin-ajax.php'))
    );
}

require_once('ajax.php');

add_filter('get_search_form', function ($html) {
    return str_replace('<input type="submit" class="search-submit" value="Search" />', '<button class="search-submit" value="Search"><i class="fas fa-search"></i> <span class="sr-only">Search</span></button>', $html);
});

