<?php

function waterwatch_enqueues()
{
    wp_enqueue_script(
        'child-scripts',
        get_stylesheet_directory_uri() . '/js/child-scripts.js',
        array(),
        '1.0.0',
        array('strategy' => 'defer')
    );
}

add_action(
    'wp_enqueue_scripts',
    'waterwatch_enqueues'
);


// load parent styles
function waterwatch_enqueue_styles()
{
    wp_enqueue_style(
        'waterwatch-parent-style',
        get_parent_theme_file_uri('style.css')
    );
}

add_action(
    'wp_enqueue_scripts',
    'waterwatch_enqueue_styles'
);