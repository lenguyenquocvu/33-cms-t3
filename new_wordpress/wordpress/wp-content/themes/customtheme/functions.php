<?php

function add_normalize_CSS() {

    wp_enqueue_style('normalize-styles', "https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css");

    function add_widget_Support() {

        register_sidebar(array(
            'name' => 'Sidebar',
            'id' => 'sidebar',
            'before_widget' => '<div>',
            'after_widget' => '</div>',
            'before_title' => '<h2>',
            'after_title' => '</h2>',
        ));
    }

}

// Register a new navigation menu

function add_Main_Nav() {

    register_nav_menu('header-menu', __('Header Menu'));
}

// Hook to the init action hook, run our navigation menu function

add_action('init', 'add_Main_Nav');

